<?php

namespace App\Providers;

use App\Events\SeriesCreated;
use App\Listeners\EmailUsersAboutSeriesCreated;
use App\Listeners\LogSeriesCreated;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SeriesCreated::class => [
            EmailUsersAboutSeriesCreated::class,
            LogSeriesCreated::class,
        ],
    ];

    public function boot()
    {
        //
    }

    public function shouldDiscoverEvents()
    {
        return false;
    }
}
