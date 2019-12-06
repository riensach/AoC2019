<?php

$input = ("168630-718098");

$startValue = 168630;
$endValue = 718098;


//$startValue = $endValue = 718098;
//$startValue = $endValue = 111122;
//$startValue = $endValue = 111122;

$value = $startValue;
$passwordCount = 0;
while($value <= $endValue) {
    $meetsCriteria = 1;
    if(strlen($value)<>6){
        $meetsCriteria = 0;
    }
//echo preg_match('/(?<!\1)(.)\1{1}(?!\1)/', $value);
    // Two adjacent values
   // if(!preg_match('/(.)\1{1}(?<!\1)(?!\1)/', $value)){
   //     $meetsCriteria = 0;
        //echo "MET";
   // }
    $stringArray = str_split($value);
    //952 = too low
    // Only two adjacent values
    $int = 0;
    $repitition = 0;
    $recentValue = '';
    $foundSoloTwoPair = 0;
    while($int < count($stringArray)) {
        if($int == 0) {
            $recentValue = $stringArray[$int];            
            $int = 1;
            $repitition = 1;
            continue;
        } elseif($recentValue == $stringArray[$int]) {
            $repitition++;
        } elseif($recentValue != $stringArray[$int]) {
            $repitition = 1;
            $recentValue = $stringArray[$int]; 
        }
        if($repitition==2 && $recentValue == $stringArray[$int] && $foundSoloTwoPair==0) {
            $foundSoloTwoPair = 1;
            $foundSoloTwoPairValue = $recentValue;
            //echo "solo pair<br>";
        }
        if($repitition>2 && $recentValue == $stringArray[$int] && $foundSoloTwoPairValue == $recentValue) {
            $foundSoloTwoPair = 0;
           // echo "solo pair CNCEL<br>";
        }
        //echo "old:$recentValue - current:".$stringArray[$int]."<br>";
        
            $int++;
    }
    
    
    // Never decrease    
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
//echo $meetsCriteria;
    if($meetsCriteria > 0 && $foundSoloTwoPair==1) {
        $passwordCount++;
    }
    $value++;
    //echo $value;
}

Echo "repeated passwords: $passwordCount";