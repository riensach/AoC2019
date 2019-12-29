<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("59796737047664322543488505082147966997246465580805791578417462788780740484409625674676660947541571448910007002821454068945653911486140823168233915285229075374000888029977800341663586046622003620770361738270014246730936046471831804308263177331723460787712423587453725840042234550299991238029307205348958992794024402253747340630378944672300874691478631846617861255015770298699407254311889484508545861264449878984624330324228278057377313029802505376260196904213746281830214352337622013473019245081834854781277565706545720492282616488950731291974328672252657631353765496979142830459889682475397686651923318015627694176893643969864689257620026916615305397");

//$input = ("80871224585914546619083218645595");

//$pattern = "0,1,0,-1";

$pattern[0] = 0;
$pattern[1] = 1;
$pattern[2] = 0;
$pattern[3] = -1;
// 59796737 is too low
$string = str_split($input);

$phases = 0;
$maxPhases = 5;
$time_pre = microtime(true);
while($phases < $maxPhases) {
    foreach($string as $key => $value) {  
        
        $elementConsidered = $key;
        $currentPattern = getPattern($pattern,$elementConsidered); 
        $i = 0;
        $value = 0;
        while($i < count($string)) {
            $value += $string[$i] * $currentPattern->first();
            //echo $string[$i] . " * " . $currentPattern->first() . " <br>";
            $currentPattern->rotate(1);
            $i++;
        }        
        $newString[$key] = substr($value, -1);;
    }
    $string = $newString;
    $phases++;
    $time_post = microtime(true);
    $exec_time = $time_post - $time_pre;
    echo "Total of $phases complete after $exec_time seconds.<br>";
}

echo $string[0] . $string[1] . $string[2] . $string[3] . $string[4] . $string[5] . $string[6] . $string[7];



function getPattern($pattern,$elementConsidered) {    
    $x = 0;
    $y = 0;
    $newPattern = new \Ds\Deque([]);
    $length = count($pattern);
    while ($x < $length) {
        while ($y <= $elementConsidered) {
            if($y==0 && $x==0) {
                $y++;
                $valueToAdd = $pattern[$x];
                continue;
            }
            $newPattern->push($pattern[$x]);
            $y++;
        }
        $x++;
        $y = 0;
    }    
    $newPattern->push($valueToAdd);
    return $newPattern;    
}

