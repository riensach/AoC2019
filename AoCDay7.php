<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("3,8,1001,8,10,8,105,1,0,0,21,30,51,72,81,94,175,256,337,418,99999,3,9,101,5,9,9,4,9,99,3,9,1001,9,3,9,1002,9,2,9,1001,9,2,9,1002,9,5,9,4,9,99,3,9,1002,9,4,9,101,4,9,9,102,5,9,9,101,3,9,9,4,9,99,3,9,1002,9,4,9,4,9,99,3,9,102,3,9,9,1001,9,4,9,4,9,99,3,9,1001,9,2,9,4,9,3,9,101,2,9,9,4,9,3,9,101,2,9,9,4,9,3,9,1001,9,1,9,4,9,3,9,101,1,9,9,4,9,3,9,101,1,9,9,4,9,3,9,101,1,9,9,4,9,3,9,1002,9,2,9,4,9,3,9,101,1,9,9,4,9,3,9,1002,9,2,9,4,9,99,3,9,102,2,9,9,4,9,3,9,1002,9,2,9,4,9,3,9,1001,9,1,9,4,9,3,9,102,2,9,9,4,9,3,9,1001,9,2,9,4,9,3,9,1002,9,2,9,4,9,3,9,101,1,9,9,4,9,3,9,101,1,9,9,4,9,3,9,101,2,9,9,4,9,3,9,102,2,9,9,4,9,99,3,9,102,2,9,9,4,9,3,9,102,2,9,9,4,9,3,9,1002,9,2,9,4,9,3,9,1001,9,1,9,4,9,3,9,1002,9,2,9,4,9,3,9,102,2,9,9,4,9,3,9,102,2,9,9,4,9,3,9,102,2,9,9,4,9,3,9,102,2,9,9,4,9,3,9,102,2,9,9,4,9,99,3,9,1001,9,2,9,4,9,3,9,101,1,9,9,4,9,3,9,1001,9,1,9,4,9,3,9,1001,9,1,9,4,9,3,9,102,2,9,9,4,9,3,9,101,1,9,9,4,9,3,9,1001,9,2,9,4,9,3,9,1002,9,2,9,4,9,3,9,1001,9,1,9,4,9,3,9,101,2,9,9,4,9,99,3,9,101,2,9,9,4,9,3,9,101,2,9,9,4,9,3,9,101,1,9,9,4,9,3,9,1001,9,1,9,4,9,3,9,1002,9,2,9,4,9,3,9,1001,9,1,9,4,9,3,9,1001,9,1,9,4,9,3,9,1001,9,2,9,4,9,3,9,1001,9,1,9,4,9,3,9,101,1,9,9,4,9,99");

//$inputData = ("1002,4,3,4,33");

//$inputData = ("3,0,4,0,99");
//
//$inputData = ("3,15,3,16,1002,16,10,16,1,16,15,15,4,15,99,0,0");
//$inputData = ("3,23,3,24,1002,24,10,24,1002,23,-1,23,
//101,5,23,23,1,24,23,23,4,23,99,0,0");

$arrayInfo = explode(",",$inputData);


$arrayLength = count($arrayInfo);

        
        $array = implode(",", $arrayInfo);
        //print_r($array);
        //echo "<br>";
        
    $maxValueSent = 0;  
    $combination = "";  
    $iterations = 0;
    $firstValue = $secondValue = $thirdValue = $fourthValue = $fifthValue = 0;
    while($firstValue < 5) {
        while($secondValue < 5) {
            while($thirdValue < 5) {
                while($fourthValue < 5) {
                    while($fifthValue < 5) {
                        $iterations++;
                        $values = [$firstValue, $secondValue, $thirdValue, $fourthValue, $fifthValue];
                        if (count($values) == count(array_unique($values))) {
                            $outputValue1 = processCode($firstValue,$arrayInfo, 0);
                            $outputValue2 = processCode($secondValue,$arrayInfo, $outputValue1);
                            $outputValue3 = processCode($thirdValue,$arrayInfo, $outputValue2);
                            $outputValue4 = processCode($fourthValue,$arrayInfo, $outputValue3);
                            $outputValue5 = processCode($fifthValue,$arrayInfo, $outputValue4);
                            $totalValue = $outputValue1 + $outputValue2 + $outputValue3 + $outputValue4 + $outputValue5;
                            if($outputValue5 > $maxValueSent) {
                                $maxValueSent = $outputValue5;
                                $combination = "$firstValue + $secondValue + $thirdValue + $fourthValue + $fifthValue";
                            }
                            if($firstValue==4 && $secondValue == 3 && $thirdValue == 2 && $fourthValue == 1 && $fifthValue == 0) {
                                echo "We got here. Value was $outputValue5 :: $outputValue1 - $outputValue2 - $outputValue3 - $outputValue4 - $outputValue5<br>";
                            }
                            if($firstValue==0 && $secondValue == 1 && $thirdValue == 2 && $fourthValue == 3 && $fifthValue == 4) {
                                echo "We got here2. Value was $outputValue5 :: $outputValue1 - $outputValue2 - $outputValue3 - $outputValue4 - $outputValue5<br>";
                            }
                        }
                       // echo "<br> Values: $firstValue $secondValue$thirdValue $fourthValue $fifthValue";
                        $fifthValue++;
                    } 
                    $fourthValue++;
                    $fifthValue = 0;
                } 
                $thirdValue++;
                $fifthValue = $fourthValue = 0;
            } 
            $secondValue++;
            $fifthValue = $fourthValue = $thirdValue = 0;
        }
        $firstValue++; 
        $fifthValue = $fourthValue = $thirdValue = $secondValue = 0;       
    }
   //$outputValue = processCode(0,$arrayInfo);
    
   echo "Max value: $maxValueSent with combination $combination -- $iterations";
        
        
        
        
    function processCode($inputValueSent, $arrayInfoSent, $secondInputValue) {
        $inputValue = $inputValueSent;
        $arrayInfo = $arrayInfoSent;
        $arrayLength = count($arrayInfo);
        $inputValueRequest = 0;
        $exit = 0;
        $position = 0;
        $iteration = 0;
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
                if($inputValueRequest > 0) {
                    $inputValue = $secondInputValue;
                } 
                $positionValue = $arrayInfo[$position+1];
                if($arrayInfo[$position+1] < 0) {
                    $positionValue = $arrayLength - abs($positionValue);
                }
                $arrayInfo[$positionValue] = $inputValue;
                $position = $position + 2;
                $inputValueRequest++;
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
                //echo "<br>Output:".$value1."<br>";
                $output = $value1;
                $array = implode(",", $arrayInfo);
                //print_r($array);

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
            //if($iteration>50000) exit;
        } 
        return $output;
    }

//echo "value at position 0 is ". $arrayInfo[0];

//print_r($arrayInfo);