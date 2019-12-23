<?php
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("109,424,203,1,21101,11,0,0,1105,1,282,21102,18,1,0,1106,0,259,1201,1,0,221,203,1,21102,1,31,0,1105,1,282,21101,38,0,0,1106,0,259,20102,1,23,2,21201,1,0,3,21101,1,0,1,21102,57,1,0,1105,1,303,1201,1,0,222,21001,221,0,3,20101,0,221,2,21102,1,259,1,21101,0,80,0,1105,1,225,21101,76,0,2,21102,1,91,0,1106,0,303,2102,1,1,223,21002,222,1,4,21102,1,259,3,21101,0,225,2,21102,225,1,1,21102,1,118,0,1105,1,225,21001,222,0,3,21102,1,54,2,21102,1,133,0,1106,0,303,21202,1,-1,1,22001,223,1,1,21101,148,0,0,1106,0,259,1202,1,1,223,21001,221,0,4,20101,0,222,3,21101,14,0,2,1001,132,-2,224,1002,224,2,224,1001,224,3,224,1002,132,-1,132,1,224,132,224,21001,224,1,1,21101,0,195,0,106,0,108,20207,1,223,2,20101,0,23,1,21101,0,-1,3,21102,1,214,0,1105,1,303,22101,1,1,1,204,1,99,0,0,0,0,109,5,1202,-4,1,249,22102,1,-3,1,21201,-2,0,2,21202,-1,1,3,21101,0,250,0,1106,0,225,22101,0,1,-4,109,-5,2105,1,0,109,3,22107,0,-2,-1,21202,-1,2,-1,21201,-1,-1,-1,22202,-1,-2,-2,109,-3,2105,1,0,109,3,21207,-2,0,-1,1206,-1,294,104,0,99,21201,-2,0,-2,109,-3,2105,1,0,109,5,22207,-3,-4,-1,1206,-1,346,22201,-4,-3,-4,21202,-3,-1,-1,22201,-4,-1,2,21202,2,-1,-1,22201,-4,-1,1,22101,0,-2,3,21102,1,343,0,1106,0,303,1106,0,415,22207,-2,-3,-1,1206,-1,387,22201,-3,-2,-3,21202,-2,-1,-1,22201,-3,-1,3,21202,3,-1,-1,22201,-3,-1,2,22102,1,-4,1,21101,0,384,0,1105,1,303,1106,0,415,21202,-4,-1,-4,22201,-4,-3,-4,22202,-3,-2,-2,22202,-2,-4,-4,22202,-3,-2,-3,21202,-4,-1,-2,22201,-3,-2,1,21202,1,1,-4,109,-5,2106,0,0");

$arrayInfo = explode(",",$input);
$arrayLength = count($arrayInfo);
       

$grid = array();

//$processor1 = new processCode(0, $arrayInfo, 2);
$time_pre = microtime(true);
$iterations = 0;
// too low - 1251280
// too high - 12501280
// too high - 12001330
// wrong - 4000479
// wrong - 7990957
// wrong - 9570799
$x = 100;
$y = 400;
$found = 0;
    while($found < 1) {
        $processor1 = new processCode(1, $arrayInfo, 2);
        $processor1->updateInputs($x,$y);  
        $processor1->processCodeFunction();
        $statusUpdate = $processor1->output;
        if($statusUpdate==1) {   
            $processor2 = new processCode(1, $arrayInfo, 3);
            $processor2->updateInputs($x+99,$y-99);   
            $processor2->processCodeFunction();          
            $statusUpdate2 = $processor2->output;
            if($statusUpdate2==1) {                  
                $processor3 = new processCode(1, $arrayInfo, 4);
                $processor3->updateInputs($x,$y-99);   
                $processor3->processCodeFunction();          
                $statusUpdate3 = $processor3->output;
                //Found square
                $foundX = $x+99;
                $foundY = $y-99;
                $answer = ($x * 10000) + $foundY;
                echo "$x,$y :: $statusUpdate :: $statusUpdate2 :: :: $statusUpdate3 :: execution time: $exec_time<br>";
                echo "Found square with top-right at $foundX,$foundY - top left of $x,$foundY - answer is $answer<br>";
                $found = 1;
            } else {
               $y++; 
            }
        } else { 
            $x++;  
        }
        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;   
        echo "$x,$y :: $statusUpdate :: $statusUpdate2 :: execution time: $exec_time<br>";
        unset($processor1,$processor2); 
    }

$time_post = microtime(true);
$exec_time = $time_post - $time_pre;   
echo "execution time: $exec_time<br>";

function printGrid($trackGridInputArray) {
    echo '<code>';
    foreach($trackGridInputArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $gridData){
            if($gridData==" ") $gridData = "&nbsp;";
            echo "$gridData ";
        }
        echo "<br>";
    }
    echo '</code>';
}

        
 class processCode {  

    public $output;
    public $inputCode;
    public $inputCodeSecond;
    public $phaseCode;
    public $processorMemory;
    public $processorPosition;
    public $processorID;
    public $halted = 0;
    public $inputValueRequest = 0;
    public $relativeBase = 0;
    public $inputValue;
    public $positionMode1;
    public $positionMode2;
    public $positionMode3;
    public $operation;
    
    function __construct($phaseCode, $processorMemory, $processorID) {
        //$this->phaseCode = $phaseCode;
        //$this->inputCode = $phaseCode;
        $this->processorMemory = $processorMemory;
        $this->processorPosition = 0;
        $this->processorID = $processorID;
       // echo "<br>Starting processing. With position:".$this->inputCode."<br>";
    }
    
    function updateInput($inputCode) {
        $this->inputCode = $inputCode;
    }
    
    function updateInputs($inputCode,$secondInputCode) {
        $this->inputCode = $inputCode;
        $this->inputCodeSecond = $secondInputCode;
    }
    
    function getReference($positionMode,$offset) {        
        $arrayLength = count($this->processorMemory);
        if($positionMode==1) {
            $value = $this->processorMemory[$this->processorPosition+$offset];
        } elseif($positionMode==2) {
            $positionValue = $this->relativeBase + $this->processorMemory[$this->processorPosition+$offset];
            if(!isset($this->processorMemory[$positionValue])) {
                $this->processorMemory[$positionValue] = 0;                
            } 
            $value = $this->processorMemory[$positionValue];
        } else {
            $positionValue = $this->processorMemory[$this->processorPosition+$offset];
            if(!isset($this->processorMemory[$positionValue])) {
                $this->processorMemory[$positionValue] = 0;                
            } 
            $value = $this->processorMemory[$positionValue];
        }
        return $value;
    }
    
    function getSaveReference($positionMode,$offset) {        
        $arrayLength = count($this->processorMemory);
        if($positionMode==1) {
            $positionValue = $this->processorMemory[$this->processorPosition+$offset];
        } elseif($positionMode==2) {
            $positionValue = $this->relativeBase + $this->processorMemory[$this->processorPosition+$offset];
        } else {
            $positionValue = $this->processorMemory[$this->processorPosition+$offset];      
        }
        return $positionValue;    
    }
    
    function updateInputReference() {
        if($this->inputValueRequest > 0) {
            $this->inputValue = $this->inputCodeSecond;
        } 

    }
    
    function processOperation() {        
        unset($this->positionMode1,$this->positionMode2,$this->positionMode3);
        
        if(strlen($this->operation)>1) {
            if(strlen($this->operation)>2) {
                $this->positionMode1 = substr($this->operation,-3,1);
            }

            if(strlen($this->operation)>3) {
                $this->positionMode2 = substr($this->operation,-4,1);
            }

            if(strlen($this->operation)>4) {
                $this->positionMode3 = substr($this->operation,-5,1);
            }
            $this->operation = substr($this->operation,-2);        
        }
        if(!isset($this->positionMode1)) { $this->positionMode1 = 0; }
        if(!isset($this->positionMode2)){ $this->positionMode2 = 0; }
        if(!isset($this->positionMode3)){ $this->positionMode3 = 0; }
    }
    
    public function processCodeFunction() {
        $this->inputValue = $this->inputCode;
        
        //$this->updateInputReference();
        $exit = 0;

        if($this->halted == 1) {
            return;
        }
        while($exit < 1) {
            $this->operation = $this->processorMemory[$this->processorPosition];
            $this->processOperation();

            if($this->operation == 1) {
                // Add 1 + 2 and store in 3
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);
                $result = $value1 + $value2;
                $value3 = $this->getSaveReference($this->positionMode3,3);
                $this->processorMemory[$value3] = $result;
                $this->processorPosition = $this->processorPosition + 4;
            } elseif($this->operation == 2) {
                // Multiply 1 + 2 and store in 3
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);
                $result = $value1 * $value2;
                $value3 = $this->getSaveReference($this->positionMode3,3);
                $this->processorMemory[$value3] = $result;
                $this->processorPosition = $this->processorPosition + 4;
            } elseif($this->operation == 3) {
                // Save input into position
                $value3 = $this->getSaveReference($this->positionMode1,1);
                $this->processorMemory[$value3] = $this->inputValue;
                $this->processorPosition = $this->processorPosition + 2;
                $this->inputValueRequest = $this->inputValueRequest + 1;
                $this->updateInputReference();
            } elseif($this->operation == 4) {
                $value1 = $this->getReference($this->positionMode1,1); 
                $output = $value1;              
                $this->output = $output;
                $this->processorPosition = $this->processorPosition + 2;
                $exit = 1;
                return;
            } elseif($this->operation == 5) {
                // Jump if true        
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);
                if($value1<>0) {                    
                    $this->processorPosition = $value2; 
                } else {
                    $this->processorPosition = $this->processorPosition + 3;
                }
            } elseif($this->operation == 6) {
                // Jump if false
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);                
                if($value1==0) {                    
                    $this->processorPosition = $value2; 
                } else {
                    $this->processorPosition = $this->processorPosition + 3;
                }
            } elseif($this->operation == 7) {
                // Store 1 if less than
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);

                $storedValue = 0;
                if($value1 < $value2) {
                    $storedValue = 1;
                }
                
                $value3 = $this->getSaveReference($this->positionMode3,3);
                $this->processorMemory[$value3] = $storedValue;
                $this->processorPosition = $this->processorPosition + 4;

            } elseif($this->operation == 8) {
                // Store 1 if equal
                $value1 = $this->getReference($this->positionMode1,1);                
                $value2 = $this->getReference($this->positionMode2,2);

                $storedValue = 0;
                if($value1 == $value2) {
                    $storedValue = 1;
                }
                $value3 = $this->getSaveReference($this->positionMode3,3);
                $this->processorMemory[$value3] = $storedValue;
                $this->processorPosition = $this->processorPosition + 4;

            } elseif($this->operation == 9) {
                // Adjust the relative base                
                $value1 = $this->getReference($this->positionMode1,1); 
                $this->relativeBase = $this->relativeBase + $value1;
                $this->processorPosition = $this->processorPosition + 2;
            } elseif($this->operation == 99) {
                // Halt
                $exit = 1;
                $this->halted = 1;
            } else {
                //echo "catch all <br>";
            }

        } 

    }
    
 }
