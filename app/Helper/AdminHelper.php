<?php

namespace App\Helper;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AdminHelper {

    public function getLiveViewContent()
    {
        return DB::table('live_view')->where('id', 1)->get();
    }

    public function updateLiveViewContent($validated)
    {
        return DB::table('live_view')->where('id', 1)
                ->update(['title' => strtolower($validated['title']),
                          'description' => strtolower($validated['description']),
                          'url' => $validated['url'],
                          'platform' => $validated['platform'],
                          'updated_at' => now(),
                          'notification_sent' => 0
                        ]);
    }

    public function updateLiveViewNotification()
    {
        return DB::table('live_view')->where('id', 1)
                ->update(['notification_sent' => 1, 'updated_at' => now()]);
    }

    public function sendLiveViewNotification($data)
    {
        $curl = curl_init();
        $fields = array(
            'app_id' => env('ONE_SIGNAL_APP_ID'), 
            'included_segments' => ["Subscribed Users"],
            'contents' => ["en" =>"Live Now - " . ucwords($data->title)],
            'headings' => ["en"=>"The Root of David - TROD Ministry"],
            'big_picture' => 'https://therootofdavid.co.uk/images/trodlive.jpg',
        );

        $fields = json_encode($fields);
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://onesignal.com/api/v1/notifications",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic " .  env('ONE_SIGNAL_AUTHORIZATION'),
                "accept: application/json",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl); 
        curl_close($curl);

        if ($err) {
            return false;
        } else {

            $decoded_json = json_decode($response, true);

            if(!isset($decoded_json['id'])){
                return false;
            }

            if(isset($decoded_json['errors'])){
                return false;
            }

            return true;
        }
    }

    public function getSermonPaginated()
    {
        return DB::table('sermon')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(20);
    }

    public function addNewSermon($validated, $imageName)
    {
        return DB::table('sermon')->insert([
                    'title' => $validated['title'],
                    'slug' => Str::of(strtolower($validated['title']))->slug('-'),
                    'thumbnail_url' => $imageName,
                    'video_url' => $validated['video_url'],
                    'timer' => $validated['timer'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
    }

    public function getSingleSermonNotification($id)
    {
        $sermon = DB::table('sermon')->where('id', $id)->where('notification_sent', 0)->get();
        return count($sermon) > 0 ? $sermon : false;
    }

    public function sermonNotification($data)
    {
        $baseUrl = URL::to('/');
        $imageUrl = $baseUrl . "/images/service-thumbnail/" . $data->thumbnail_url;

        $curl = curl_init();
        $fields = array(
            'app_id' => env('ONE_SIGNAL_APP_ID'),
            'included_segments' => ["Subscribed Users"],
            'contents' => ["en" => "New Sermon - " . ucwords($data->title)],
            'headings' => ["en" => "The Root of David - TROD Ministry"],
            'big_picture' => $imageUrl,
        );

        $fields = json_encode($fields);

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://onesignal.com/api/v1/notifications",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic " . env('ONE_SIGNAL_AUTHORIZATION'),
                "accept: application/json",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl); 
        curl_close($curl);

        if ($err) {
            return false;
        } else {

            $decoded_json = json_decode($response, true);

            if(!isset($decoded_json['id'])){
                return false;
            }

            if(isset($decoded_json['errors'])){
                return false;
            }

            return true;
        }
    }

    public function updateSermonNotification($id)
    {
        return DB::table('sermon')->where('id', $id)
                ->update(['notification_sent' => 1,
                          'updated_at' => now()]);
    }

    public function confirmSermonParameters($id, $slug)
    {
        $sermon  = DB::table('sermon')->where('id', $id)->where('slug', $slug)->get();
        return count($sermon) > 0 ? $sermon : false;
    }

    public function deleteSermon($id, $slug){
        return DB::table('sermon')->where('id', $id)->where('slug', $slug)
                ->update(['deleted_at' => now(), 'updated_at' => now()]);
    }

    public function updateSermonWithImage($validated, $imageName, $id, $slug)
    {
        return DB::table('sermon')->where('id', $id)->where('slug', $slug)
                ->update(['title' => $validated['title'],
                          'slug' => Str::of(strtolower($validated['title']))->slug('-'),
                          'thumbnail_url' => $imageName,
                          'video_url' => $validated['video_url'],
                          'timer' => $validated['timer'],
                          'updated_at' => now()]);
    }

    public function updateSermonWithoutImage($validated, $id, $slug)
    {
        return DB::table('sermon')->where('id', $id)->where('slug', $slug)
                ->update(['title' => $validated['title'],
                          'slug' => Str::of(strtolower($validated['title']))->slug('-'),
                          'video_url' => $validated['video_url'],
                          'timer' => $validated['timer'],
                          'updated_at' => now()]);
    }

}