<?php

class WitchSaga
{
    public function __construct()
    {
    }
    public function index($personA, $personB){
        $yearA = $personA['yearOfDeath'] - $personA['ageOfDeath'];
        $yearB = $personB['yearOfDeath'] - $personB['ageOfDeath'];
        if($yearA < 1 || $yearB < 1){
            $average =  -1;
        }else{
            $killedA = $this->kill_every_year($yearA);
            $killedB = $this->kill_every_year($yearB);
            $average = ($killedA + $killedB) / 2;
        }
        return $average;
    }
    public function kill_every_year($year){
        if($year==1){
            # 1st year 
            return 1;
        }else if($year==2){
            # 2nd year
            return 2;
        }else{
            #begin array of  2nd year
            $array = array(
                0 => 1,
                1 => 1
            );
            # 3rd year etc
            #get loop, if year is 3 loop one time etc
            if($year>2){
                $year = $year -2;
            }
            for($t = 0; $t < $year; $t++){
                $count = count($array);
                // add the last two elements
                $last_two = $array[$count-1] + $array[$count-2];
                $array[] = $last_two;
            }
            #loop and increment value all array of the year
            $vals = 0;
            foreach($array AS $value){
                $vals += $value;
            }
            return $vals;
        }
        
    }
}