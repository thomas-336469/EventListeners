<?php

namespace App\Listeners;

use App\Events\UserUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\UserUpdateEmail;
use Illuminate\Support\Facades\Mail;

class SendUserUpdateEmail
{
    public function handle(UserUpdate $event)
    {
        Mail::to($event->user->email)->send(new UserUpdateEmail($event->user));
    }
}
