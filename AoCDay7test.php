<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("3,225,1,225,6,6,1100,1,238,225,104,0,2,218,57,224,101,-3828,224,224,4,224,102,8,223,223,1001,224,2,224,1,223,224,223,1102,26,25,224,1001,224,-650,224,4,224,1002,223,8,223,101,7,224,224,1,223,224,223,1102,44,37,225,1102,51,26,225,1102,70,94,225,1002,188,7,224,1001,224,-70,224,4,224,1002,223,8,223,1001,224,1,224,1,223,224,223,1101,86,70,225,1101,80,25,224,101,-105,224,224,4,224,102,8,223,223,101,1,224,224,1,224,223,223,101,6,91,224,1001,224,-92,224,4,224,102,8,223,223,101,6,224,224,1,224,223,223,1102,61,60,225,1001,139,81,224,101,-142,224,224,4,224,102,8,223,223,101,1,224,224,1,223,224,223,102,40,65,224,1001,224,-2800,224,4,224,1002,223,8,223,1001,224,3,224,1,224,223,223,1102,72,10,225,1101,71,21,225,1,62,192,224,1001,224,-47,224,4,224,1002,223,8,223,101,7,224,224,1,224,223,223,1101,76,87,225,4,223,99,0,0,0,677,0,0,0,0,0,0,0,0,0,0,0,1105,0,99999,1105,227,247,1105,1,99999,1005,227,99999,1005,0,256,1105,1,99999,1106,227,99999,1106,0,265,1105,1,99999,1006,0,99999,1006,227,274,1105,1,99999,1105,1,280,1105,1,99999,1,225,225,225,1101,294,0,0,105,1,0,1105,1,99999,1106,0,300,1105,1,99999,1,225,225,225,1101,314,0,0,106,0,0,1105,1,99999,108,226,677,224,102,2,223,223,1005,224,329,1001,223,1,223,1107,677,226,224,102,2,223,223,1006,224,344,1001,223,1,223,7,226,677,224,1002,223,2,223,1005,224,359,101,1,223,223,1007,226,226,224,102,2,223,223,1005,224,374,101,1,223,223,108,677,677,224,102,2,223,223,1006,224,389,1001,223,1,223,107,677,226,224,102,2,223,223,1006,224,404,101,1,223,223,1108,677,226,224,102,2,223,223,1006,224,419,1001,223,1,223,1107,677,677,224,1002,223,2,223,1006,224,434,101,1,223,223,1007,677,677,224,102,2,223,223,1006,224,449,1001,223,1,223,1108,226,677,224,1002,223,2,223,1006,224,464,101,1,223,223,7,677,226,224,102,2,223,223,1006,224,479,101,1,223,223,1008,226,226,224,102,2,223,223,1006,224,494,101,1,223,223,1008,226,677,224,1002,223,2,223,1005,224,509,1001,223,1,223,1007,677,226,224,102,2,223,223,1005,224,524,1001,223,1,223,8,226,226,224,102,2,223,223,1006,224,539,101,1,223,223,1108,226,226,224,1002,223,2,223,1006,224,554,101,1,223,223,107,226,226,224,1002,223,2,223,1005,224,569,1001,223,1,223,7,226,226,224,102,2,223,223,1005,224,584,101,1,223,223,1008,677,677,224,1002,223,2,223,1006,224,599,1001,223,1,223,8,226,677,224,1002,223,2,223,1006,224,614,1001,223,1,223,108,226,226,224,1002,223,2,223,1006,224,629,101,1,223,223,107,677,677,224,102,2,223,223,1005,224,644,1001,223,1,223,8,677,226,224,1002,223,2,223,1005,224,659,1001,223,1,223,1107,226,677,224,102,2,223,223,1005,224,674,1001,223,1,223,4,223,99,226");

//$inputData = ("1002,4,3,4,33");

//$inputData = ("3,0,4,0,99");
//
//$inputData = ("3,12,6,12,15,1,13,14,13,4,13,99,-1,0,1,9");
$inputData = ("3,15,3,16,1002,16,10,16,1,16,15,15,4,15,99,0,0");
$arrayInfo = explode(",",$inputData);

$exit = 0;
$position = 0;
$inputValue = 1;
$iteration = 0;
$arrayLength = count($arrayInfo);

        echo "<br>";
while($exit < 1) {
    $iteration++;
    $operation = $arrayInfo[$position];
    unset($positionMode1,$positionMode2);

    if(strlen($operation)>1) {
        if(strlen($operation)>2) {
            $positionMode1 = substr($operation,-3,1);
        }
        
        if(strlen($operation)>3) {
            $positionMode2 = substr($operation,-4,1);
        }
        $operation = substr($operation,-2);        
    }
    if(!isset($positionMode1)) { $positionMode1 = 0; }
    if(!isset($positionMode2)){ $positionMode2 = 0; }

//echo "<br>Operation :: $operation - $positionMode1 - $positionMode2";
    if($operation == 1) {
        // Add 1 + 2 and store in 3
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            //echo "<br>".$arrayInfo[$position+1]."<br>";
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue) - 1;
            }
            $value1 = $arrayInfo[$positionValue];            
        }
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            //echo "<br>".$arrayInfo[$position+2]."<br>";
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        
        $result = $value1 + $value2;            
        $positionValue = $arrayInfo[$position+3];
            if($arrayInfo[$position+3] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
        $arrayInfo[$positionValue] = $result;
        $position = $position + 4;
        
    } elseif($operation == 2) {
        // Multiply 1 + 2 and store in 3
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($arrayLength);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        
        $result = $value1 * $value2; 
        $positionValue = $arrayInfo[$position+3];
        if($arrayInfo[$position+3] < 0) {
            $positionValue = $arrayLength - abs($positionValue);
        }
        $arrayInfo[$positionValue] = $result;
        $position = $position + 4;
    } elseif($operation == 3) {
        // Save input into position
        $positionValue = $arrayInfo[$position+1];
        if($arrayInfo[$position+1] < 0) {
            $positionValue = $arrayLength - abs($positionValue);
        }
        $arrayInfo[$positionValue] = $inputValue;
        $position = $position + 2;
    } elseif($operation == 4) {
        // Output only input
        if($positionMode1==1) {
            //echo "hi";
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
       // $positionValue = $arrayInfo[$position+1];
        //if($arrayInfo[$position+1] < 0) {
        //    $positionValue = $arrayLength - abs($positionValue);
       // }
        echo "<br>Output:".$value1."<br>";
        $array = implode(",", $arrayInfo);
        print_r($array);
        
       // die();
        $position = $position + 2;
    } elseif($operation == 5) {
        // Jump if true        
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
        
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($arrayLength);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        if($value1<>0) {
            $position = $value2;            
        } else {
            $position = $position+3;
        }
       // echo "DONE THIUS";
    } elseif($operation == 6) {
        // Jump if false      
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
        
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($arrayLength);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        if($value1==0) {
            $position = $value2;            
        } else {
            $position = $position+3;
        }
       // echo "update position to be $value1 - $position - $positionMode1<br>";
    } elseif($operation == 7) {
        // Store 1 if less than
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($arrayLength);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        
        $storedValue = 0;
        if($value1 < $value2) {
            $storedValue = 1;
        }
        $positionValue = $arrayInfo[$position+3];
        if($arrayInfo[$position+3] < 0) {
            $positionValue = $arrayLength - abs($positionValue);
        }
        $arrayInfo[$positionValue] = $storedValue;
        $position = $position + 4;
        
    } elseif($operation == 8) {
        // Store 1 if equal
        if($positionMode1==1) {
            $value1 = $arrayInfo[$position+1];
        } else {
            $positionValue = $arrayInfo[$position+1];
            if($arrayInfo[$position+1] < 0) {
                $positionValue = $arrayLength - abs($positionValue);
            }
            $value1 = $arrayInfo[$positionValue];        
        }
        if($positionMode2==1) {
            $value2 = $arrayInfo[$position+2];
        } else {
            $positionValue = $arrayInfo[$position+2];
            if($arrayInfo[$position+2] < 0) {
                $positionValue = $arrayLength - abs($arrayLength);
            }
            $value2 = $arrayInfo[$positionValue];            
        }
        
        $storedValue = 0;
        if($value1 == $value2) {
            $storedValue = 1;
        }
        $positionValue = $arrayInfo[$position+3];
        if($arrayInfo[$position+3] < 0) {
            $positionValue = $arrayLength - abs($positionValue);
        }
        $arrayInfo[$positionValue] = $storedValue;
        $position = $position + 4;

    } elseif($operation == 99) {
        // Halt
        $exit = 1;
    } else {
        //echo "catch all <br>";
    }
    
  // echo "position1:".$position." position2:".($position+1)." position3:".($position+2)." position4:".($position+3)." - ";
   // echo "hi2 - $position - $operation - ".count($arrayInfo)." - exit? $exit<br>";
    if($iteration>50000) exit;
}   

echo "value at position 0 is ". $arrayInfo[0];

//print_r($arrayInfo);