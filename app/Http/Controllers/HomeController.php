<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * The homepage
     *
     * @return \Illuminate\View\View
     */
    public function index( )
    {
        // Get the dates for this month...
        $availability = $this->getAvailablity( Carbon::now( ) );

        // ...and next month
        $availability += $this->getAvailablity( Carbon::now( )->addMonth( ) );

        // Now go through and inject the date as a Carbon instance, then group by the class
        $instances = collect(
            $availability
        )->map( function( $instance ) {
            $instance[ 'date' ] = Carbon::parse( $instance[ 'time' ] );
            return $instance;
        } )->groupBy( 'appointmentTypeID' );

        // Return the rendered homepage
        return view( 'home.index', [ 'classes' => $this->classes, 'instances' => $instances ] );
    }

    /**
     * Get the available classes for the given month
     *
     * @param Carbon $month
     * @return array
     */
    public function getAvailablity( $month )
    {
        return app( 'AcuityScheduling' )->request(
            'availability/classes',
            [
                'query' => [
                    'month' => $month->format( 'Y-m' ),
                    'includeUnavailable' => 'true',
                ],
            ]
        );
    }

}
