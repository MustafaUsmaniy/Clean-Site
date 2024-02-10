<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEmailToUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    // PostCreated eventi bajarilganga nima ish qilinishi kerakligini shu yerga yozish
    public function handle(PostCreated $event): void
    {
        Log::alert('Foydalanuvchiga email jo\'natish. Sarlavha: '.$event->post->title);
    }
}
