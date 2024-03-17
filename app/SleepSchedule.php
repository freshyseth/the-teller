<?php

namespace App;

use Carbon\Carbon;

class SleepSchedule
{
    private $sleepStartEpoch;
    private $totalCycle = 48;

    function __construct($sleepStartEpoch)
    {
      $this->sleepStartEpoch = $sleepStartEpoch;
    }

    public function isFriendAwake($timeToCheck = null)
    {
      if(is_null($timeToCheck))
      {
        $timeToCheck = Carbon::now();
      }
      
      $difference = $this->sleepStartEpoch->diffInHours($timeToCheck);
      echo 'difference: ' . $difference . ' | ';
      if($difference > 0)
      {
        $cycles = ceil($difference / $this->totalCycle);
        echo 'cycles: ' . $cycles . ' | ';
        $hoursToSubtract = $this->totalCycle * ($cycles - 1);
        echo 'hoursToSubtract: ' . $hoursToSubtract  . ' | ';
        $hourInCycle = $difference - $hoursToSubtract + 1;
      } else {
        $hourInCycle = 1;
      }
      echo 'hourInCycle: ' . $hourInCycle . ' | ';
      if($hourInCycle >= 1 && $hourInCycle <= 14 || $hourInCycle == 49)
      {
        return false;
      } else {
        return true;
      }
    }
}
