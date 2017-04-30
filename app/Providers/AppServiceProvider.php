<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use AcuityScheduling;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( 'AcuityScheduling', function ( $app ) {
            return new AcuityScheduling( [
                'userId' => env( 'ACUITY_USER_ID' ),
                'apiKey' => env( 'ACUITY_API_KEY' ),
            ] );
        } );
    }
}
