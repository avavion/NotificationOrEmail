<?php

namespace App\Listeners;

use App\Events\CustomEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CustomEventHandler implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param \App\Events\CustomEvent $event
     * @return void
     */
    public function handle(CustomEvent $event)
    {
        mail('avavionmvm@gmail.com', 'Заказ', 'Вы заказали ' . $event->order->name);
    }
}
