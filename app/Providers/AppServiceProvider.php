<?php

namespace App\Providers;

use App\Models\Booking;
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
        // $bookings = Booking::all();
        // view()->share('tabBooks', $bookings);
    }
}
