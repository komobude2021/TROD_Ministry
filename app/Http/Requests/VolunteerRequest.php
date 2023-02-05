<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use App\Helper\Twilio\PhoneNumberLookupService;

class VolunteerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $lookupService = new PhoneNumberLookupService(env('TWILIO_AUTH_SID'), env('TWILIO_AUTH_TOKEN'));

        return [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'countryCode' => ['required'],
            'full_number' => ['required'],
            'phone_number' => ['required', 'digits_between:5,11', new PhoneNumber($lookupService)],
            'address_line_1' => [],
            'address_line_2' => [],
            'city' => [],
            'state' => [],
            'post_code' => [],
            'comment' => [],
        ];
    }
}
