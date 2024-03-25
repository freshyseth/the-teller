<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Add a Carbon macro for displaying times in application time.
        // See app.confif for timezone_display setting.
        Carbon::macro('inApplicationTimeZone', function () {
            return $this->tz(config('app.timezine_display'));
        });
    }
}
