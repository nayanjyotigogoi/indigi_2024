<?php

namespace App\Listeners;

use App\Events\ContactSubmitted;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactMail
{
    public function handle(ContactSubmitted $event)
    {
        Mail::to('workwithnayan27@gmail.com')->send(new ContactMail($event->contact));
    }
}
