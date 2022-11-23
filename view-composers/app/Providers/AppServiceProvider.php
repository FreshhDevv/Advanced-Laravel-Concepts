<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Option 1 - Every single view.
        // View::share('channels', Channel::orderBy('name')->get());

        // Option 2 - Granular views with wildcards
        // View::composer(['post.*', 'channel.index'], function ($view) {
        //     $view->with('channels', Channel::orderBy('name')->get());
        // });

        // Option 3 - Dedicated Class
        View::composer(['post.*', 'channel.index'], ChannelsComposer::class);
    }
}
