<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Helper\Twilio\PhoneNumberLookupService;

class PhoneNumber implements Rule
{

    private $service;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(PhoneNumberLookupService $phoneNumberLookupService)
    {
        $this->service = $phoneNumberLookupService;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->service->validate($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid Phone Number | Please Enter A Valid Phone Number';
    }
}
