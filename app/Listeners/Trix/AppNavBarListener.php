<?php

namespace App\Listeners\Trix;

use App\Events\Trix\AppNarBar;
use App\Http\Controllers\Trix\AppNavBar;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AppNavBarListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppNarBar $event): void
    {
    
    }
}
