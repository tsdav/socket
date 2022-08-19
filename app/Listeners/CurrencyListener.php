<?php

namespace App\Listeners;

use App\Events\CurrencyUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CurrencyListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CurrencyUpdatedEvent  $event
     * @return void
     */
    public function handle(CurrencyUpdatedEvent $event)
    {
        //
    }
}
