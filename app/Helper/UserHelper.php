<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class UserHelper {

    public function getLatestEvent()
    {
        return DB::table('events')->where('deleted_at', null)->orderBy('created_at', 'desc')->limit(1)->get();
    }

    public function getEventList()
    {
        return DB::table('events')->where('deleted_at', null)->orderBy('created_at', 'desc')->limit(8)->get();
    }

    public function getLiveViewEvent()
    {
        return DB::table('live_view')->where('id', '1')->get();
    }

    public function getSermonPaginate()
    {
        return DB::table('sermon')->where('deleted_at', null)->orderBy('created_at', 'desc')->paginate(24);
    }

    public function getSermon($slug, $id)
    {
        return DB::table('sermon')->where('id', $id)->where('deleted_at', null)->where('slug', $slug)->get();
    }

}