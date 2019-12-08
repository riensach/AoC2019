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
//
//$inputData = ("3,52,1001,52,-5,52,3,53,1,52,56,54,1007,54,5,55,1005,55,26,1001,54,-5,54,1105,1,12,1,53,54,53,1008,54,0,55,1001,55,1,55,2,53,55,53,4,53,1001,56,-1,56,1005,56,6,99,0,0,0,0,10");
//$inputData = ("3,26,1001,26,-4,26,3,27,1002,27,2,27,1,27,26,27,4,27,1001,28,-1,28,1005,28,6,99,0,0,5");
$arrayInfo = explode(",",$inputData);


$arrayLength = count($arrayInfo);

        
        $array = implode(",", $arrayInfo);
        //print_r($array);
        //echo "<br>";
        
    $maxValueSent = 0;  
    $combination = "";  
    $iterations = 0;
    $firstValue = $secondValue = $thirdValue = $fourthValue = $fifthValue = 5;
    while($firstValue < 10) {
        while($secondValue < 10) {
            while($thirdValue < 10) {
                while($fourthValue < 10) {
                    while($fifthValue < 10) {
                        $iterations++;
                        $values = [$firstValue, $secondValue, $thirdValue, $fourthValue, $fifthValue];
                        if (count($values) == count(array_unique($values))) {
                            $processor1 = new processCode($firstValue, $arrayInfo, 1);                            
                            $processor1->processCodeFunction();
                            $outputValue1 = $processor1->output;
                            $processor2 = new processCode($secondValue, $arrayInfo, 2);
                           // echo $outputValue1;
                            $processor2->updateInput($outputValue1);
                            $processor2->processCodeFunction();
                            $outputValue2 = $processor2->output;
                            $processor3 = new processCode($thirdValue, $arrayInfo, 3);
                           // echo $outputValue2;
                            $processor3->updateInput($outputValue2);
                            $processor3->processCodeFunction();
                            $outputValue3 = $processor3->output;
                            $processor4 = new processCode($fourthValue, $arrayInfo, 4);
                           // echo $outputValue3;
                            $processor4->updateInput($outputValue3);
                            $processor4->processCodeFunction();
                            $outputValue4 = $processor4->output;
                            $processor5 = new processCode($fifthValue, $arrayInfo, 5);
                           // echo $outputValue4;
                            $processor5->updateInput($outputValue4);
                            $processor5->processCodeFunction();
                            $outputValue5 = $processor5->output;
                            while($processor1->halted<>1 || $processor2->halted<>1 || $processor3->halted<>1 || $processor4->halted<>1 || $processor5->halted<>1) {
                              //  echo $outputValue5;
                                $processor1->updateInput($outputValue5);
                                $processor1->processCodeFunction();
                                $outputValue1 = $processor1->output;                                
                              //  echo $outputValue1;
                                $processor2->updateInput($outputValue1);
                                $processor2->processCodeFunction();
                                $outputValue2 = $processor2->output;                              
                              //  echo $outputValue2;
                                $processor3->updateInput($outputValue2);
                                $processor3->processCodeFunction();
                                $outputValue3 = $processor3->output;                              
                              //  echo $outputValue3;
                                $processor4->updateInput($outputValue3);
                                $processor4->processCodeFunction();
                                $outputValue4 = $processor4->output;                              
                              //  echo $outputValue4;
                                $processor5->updateInput($outputValue4);
                                $processor5->processCodeFunction();
                                $outputValue5 = $processor5->output;  
                               // echo "<br>$firstValue + $secondValue + $thirdValue + $fourthValue + $fifthValue<br>$outputValue1 - $outputValue2 - $outputValue3 - $outputValue4 - $outputValue5";
                              //  echo "<br>Halted status: " .$processor1->halted.$processor2->halted.$processor3->halted.$processor4->halted.$processor5->halted."<br>";
                                
                            }
                            if($outputValue5 > $maxValueSent) {
                                $maxValueSent = $outputValue5;
                                $combination = "$firstValue + $secondValue + $thirdValue + $fourthValue + $fifthValue";
                            }
                        }
                       // echo "<br> Values: $firstValue $secondValue$thirdValue $fourthValue $fifthValue";
                        $fifthValue++;
                    } 
                    $fourthValue++;
                    $fifthValue = 5;
                } 
                $thirdValue++;
                $fifthValue = $fourthValue = 5;
            } 
            $secondValue++;
            $fifthValue = $fourthValue = $thirdValue = 5;
        }
        $firstValue++; 
        $fifthValue = $fourthValue = $thirdValue = $secondValue = 5;       
    }
   //$outputValue = processCode(0,$arrayInfo);
    
   echo "Max value: $maxValueSent with combination $combination -- $iterations";
        
        
        
 class processCode {  

    public $output;
    public $inputCode;
    public $phaseCode;
    public $processorMemory;
    public $processorPosition;
    public $processorID;
    public $halted = 0;
    public $inputValueRequest = 0;
    
    function __construct($phaseCode, $processorMemory, $processorID) {
        $this->phaseCode = $phaseCode;
        $this->processorMemory = $processorMemory;
        $this->processorPosition = 0;
        $this->processorID = $processorID;
       // echo "<br>Starting processing. With position:".$this->inputCode."<br>";
    }
    
    function updateInput($inputCode) {
        $this->inputCode = $inputCode;
    }
    
    public function processCodeFunction() {
        $inputValue = $this->phaseCode;
        
        if($this->inputValueRequest > 0) {
            $inputValue = $this->inputCode;
        } 
        if($this->inputValueRequest == 1 && $this->processorID == 1) {
            $inputValue = 0;
        } 
        $arrayInfo = $this->processorMemory;
        $arrayLength = count($arrayInfo);
        $exit = 0;
        $position = $this->processorPosition;
        $iteration = 0;
        if($this->halted == 1) {
            return;
        }
        while($exit < 1) {
            $iteration++;
            $operation = $arrayInfo[$position];
            
           // echo ":: $iteration - $position - $operation";
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
               // echo " - PID: ".$this->processorID." :: Input Value: ".$inputValue."<Br>";
                $positionValue = $arrayInfo[$position+1];
                if($arrayInfo[$position+1] < 0) {
                    $positionValue = $arrayLength - abs($positionValue);
                }
                $arrayInfo[$positionValue] = $inputValue;
                $position = $position + 2;
                $this->inputValueRequest = $this->inputValueRequest + 1;
                if($this->inputValueRequest > 0) {
                    $inputValue = $this->inputCode;
                } 
                if($this->inputValueRequest == 1 && $this->processorID == 1) {
                    $inputValue = 0;
                } 
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
                 
                $this->output = $output;
                $exit = 1;
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
                $this->halted = 1;
            } else {
                //echo "catch all <br>";
            }

        } 
        
        $this->processorPosition = $position;
        
        $this->processorMemory = $arrayInfo;

    }
    
 }

