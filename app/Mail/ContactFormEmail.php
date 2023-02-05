<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $validated;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validated)
    {
        $this->subject = "CONTACT/INQUIRIES EMAIL";
        $this->validated = $validated;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactformemail');
    }
}
