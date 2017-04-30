<?php

$app->get( '/', 'HomeController@index' );
$app->get( '/{key}/{date}/{calendarId}/book', 'ClassesController@book' );
$app->post( '/{key}/{date}/{calendarId}/book', 'ClassesController@confirmBooking' );
