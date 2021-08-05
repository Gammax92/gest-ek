<?php

namespace App\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DomainExpiration extends Mailable
{
    use Queueable, SerializesModels;
    public $domain;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))->subject('Dominio in scadenza')->view('emails.domain-expiration');

    }
}
