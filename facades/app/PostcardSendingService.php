<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{
    public function __construct($country, $width, $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email)
    {
        Mail::raw($message, function ($message) use ($email) {
            $message->to($email);
        });


        // Mail out postcard through some service
        // At this point we will have access to:
        // $this->country
        // $this->width
        // $this->height

dump('Postcard was sent with the message: '. $message)        ;
    }
}
