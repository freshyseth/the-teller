<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;
use Carbon\Carbon;
use App\SleepSchedule;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tell', function (Request $request) {
    $sleepStartEpoch = CarbonImmutable::parse('3/16/2024 04:30', 'UTC');
    $sleepSchedule = new SleepSchedule($sleepStartEpoch);
    $datetime = $request->datetime;
    $timezone = ($request->timezone) ? $request->timezone : 'America/Chicago';

    $timeToCheck = CarbonImmutable::parse(
        $datetime,
        $timezone
    )->timezone('UTC');
    
    $yourDateTime = $timeToCheck->timezone($timezone);
    
    $isFriendAwake = $sleepSchedule->isFriendAwake($timeToCheck);
    
    return view('tell', [
        'isFriendAwake' => $isFriendAwake,
        'yourDateTime' => $yourDateTime,
    ]);
});