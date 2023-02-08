<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class Volunteer {

    public function addNewVolunteer($validated)
    {
        return  DB::table('volunteers')->insert([
                    'firstname' => strtolower($validated['firstname']),
                    'lastname' => strtolower($validated['lastname']),
                    'email' => strtolower($validated['email']),
                    'country_code' => $validated['countryCode'],
                    'full_number' => $validated['full_number'],
                    'phone_number' => $validated['phone_number'],
                    'address_line_1' => $validated['address_line_1'],
                    'address_line_2' => $validated['address_line_2'],
                    'city' => $validated['city'],
                    'state' => $validated['state'],
                    'post_code' => $validated['post_code'],
                    'comment' => $validated['comment'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
    }

    public function checkIfEmailExist($email)
    {
        $volunteer = DB::table('volunteers')->where('email', strtolower($email))->get();
        if(count($volunteer) > 0){
            return true;
        }
        return false;
    }

    public function checkIfPhoneNumberExist($full_number)
    {
        $volunteer = DB::table('volunteers')->where('full_number', strtolower($full_number))->get();
        if(count($volunteer) > 0){
            return true;
        }
        return false;

    }
}