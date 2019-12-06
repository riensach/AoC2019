<?php

$input = ("168630-718098");

$startValue = 168630;
$endValue = 718098;
$value = $startValue;
$passwordCount = 0;
while($value <= $endValue) {
    $meetsCriteria = 1;
    if(strlen($value)<>6){
        $meetsCriteria = 0;
    }

    // Two adjacent values
    if(!preg_match('/(.)\1{1}/', $value)){
        $meetsCriteria = 0;
    }
    // Never decrease
    $stringArray = str_split($value);
    if($stringArray[1] < $stringArray[0]) {
        $meetsCriteria = 0;
    }
    if($stringArray[2] < $stringArray[1]) {
        $meetsCriteria = 0;
    }
    if($stringArray[3] < $stringArray[2]) {
        $meetsCriteria = 0;
    }
    if($stringArray[4] < $stringArray[3]) {
        $meetsCriteria = 0;
    }
    if($stringArray[5] < $stringArray[4]) {
        $meetsCriteria = 0;
    }
   // echo $stringArray[5] . " - " . $stringArray[4];

    if($meetsCriteria > 0) {
        $passwordCount++;
    }
    $value++;
}

Echo "repeated p2asswords: $passwordCount";