<?php


use Carbon\Carbon;
use Tim\Basketball\Models\Calendar;

Route::group(['prefix' => 'api'], function () {
    Route::get('calendar', function() {

        $events = Calendar::whereDate('date', '>', Carbon::now())->get();

        return response()->json($events);

    });
});


