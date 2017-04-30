<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ClassesController extends Controller
{
    
    /**
     * The booking page
     *
     * @param string $key
     * @param string$date
     * @param integer $calendarId
     * @return \Illuminate\View\View
     */
    public function book( $key, $date, $calendarId )
    {
        $class = collect( $this->classes )->where( 'key', $key )->first( );

        return view(
            'classes.book',
            [
                'class' => $class,
                'date' => Carbon::parse( $date ),
            ]
        );

    }

    /**
     * POST callback for making the booking
     *
     * @param string $key
     * @param string$date
     * @param integer $calendarId
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function confirmBooking( $key, $date, $calendarId, Request $request )
    {
        $class = collect( $this->classes )->where( 'key', $key )->first( );

        $appointment = app( 'AcuityScheduling' )->request('/appointments', array(
            'method' => 'POST',
            'data' => array(
                'appointmentTypeID' => $class[ 'acuity_id' ],
                'calendarId'        => $calendarId,
                'datetime'          => $date,
                'firstName'         => $request->input( 'firstName' ),
                'lastName'          => $request->input( 'lastName' ),
                'email'             => $request->input( 'email' ),
            )
        ));

        // Return the rendered homepage
        return view( 'classes.booking-confirmation', compact( 'class', 'appointment' ) );
    }


}
