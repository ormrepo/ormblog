<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\SomeEvent::class => [
            \App\Listeners\EventListener::class,
        ],
        \App\Events\BlogWasCreated::class => [
            \App\Listeners\SendPublishedNotification::class,
        ],
        \App\Events\BlogWasUpdated::class => [
            \App\Listeners\SendUpdateNotification::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
