<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("1,12,2,3,1,1,2,3,1,3,4,3,1,5,0,3,2,13,1,19,1,6,19,23,2,6,23,27,1,5,27,31,2,31,9,35,1,35,5,39,1,39,5,43,1,43,10,47,2,6,47,51,1,51,5,55,2,55,6,59,1,5,59,63,2,63,6,67,1,5,67,71,1,71,6,75,2,75,10,79,1,79,5,83,2,83,6,87,1,87,5,91,2,9,91,95,1,95,6,99,2,9,99,103,2,9,103,107,1,5,107,111,1,111,5,115,1,115,13,119,1,13,119,123,2,6,123,127,1,5,127,131,1,9,131,135,1,135,9,139,2,139,6,143,1,143,5,147,2,147,6,151,1,5,151,155,2,6,155,159,1,159,2,163,1,9,163,0,99,2,0,14,0");

//$inputData = ("1,9,10,3,2,3,11,0,99,30,40,50");

//$inputData = ("1,0,0,0,99");

$arrayInfo = explode(",",$inputData);

$exit = 0;
$position = 0;
while($exit < 1) {
    
    $operation = $arrayInfo[$position];
    echo "position1:".$position." position2:".($position+1)." position3:".($position+2)." position4:".($position+3)." - ";   
    if($operation == 1) {
        // Add 1 + 2 and store in 3
        $result = $arrayInfo[$arrayInfo[$position+1]] + $arrayInfo[$arrayInfo[$position+2]];
        $arrayInfo[$arrayInfo[$position+3]] = $result;
        $position = $position + 4;
        
    } elseif($operation == 2) {
        // Multiply 1 + 2 and store in 3
        $result = $arrayInfo[$arrayInfo[$position+1]] * $arrayInfo[$arrayInfo[$position+2]];
        $arrayInfo[$arrayInfo[$position+3]] = $result;
        $position = $position + 4;
        
    } elseif($operation == 99) {
        // Halt
        $exit = 1;
    }
    
   echo "position1:".$position." position2:".($position+1)." position3:".($position+2)." position4:".($position+3)." - ";
    echo "hi2 - $position - $operation - ".count($arrayInfo)." - exit? $exit<br>";
    
}   

echo "value at position 0 is ". $arrayInfo[0];

print_r($arrayInfo);