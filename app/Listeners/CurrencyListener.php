<?php

namespace App\Listeners;

use App\Events\CurrencyUpdatedEvent;

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
     * @param CurrencyUpdatedEvent $event
     * @return void
     */
    public function handle(CurrencyUpdatedEvent $event): void
    {
        //
    }
}
