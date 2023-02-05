<?php

namespace App\Helper\Twilio;

use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class PhoneNumberLookupService
{
    public $client;

    public function __construct($authSID, $authToken)
    {
        $this->client = new Client($authSID, $authToken);
    }

    public function validate(string $phoneNumber): bool
    {
        if (empty($phoneNumber)) {
            return false;
        }

        try {
            $this->client
                ->lookups
                ->v1
                ->phoneNumbers($phoneNumber)
                ->fetch();
        } catch (TwilioException $e) {
            return false;
        }

    return true;
    }
}
