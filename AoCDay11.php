<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("3,8,1005,8,335,1106,0,11,0,0,0,104,1,104,0,3,8,1002,8,-1,10,1001,10,1,10,4,10,108,0,8,10,4,10,102,1,8,28,3,8,1002,8,-1,10,1001,10,1,10,4,10,1008,8,1,10,4,10,101,0,8,51,1006,0,82,1006,0,56,1,1107,0,10,3,8,102,-1,8,10,101,1,10,10,4,10,1008,8,0,10,4,10,1001,8,0,83,3,8,1002,8,-1,10,101,1,10,10,4,10,108,1,8,10,4,10,101,0,8,104,1006,0,58,3,8,1002,8,-1,10,1001,10,1,10,4,10,108,0,8,10,4,10,1001,8,0,129,1006,0,54,1006,0,50,1006,0,31,3,8,1002,8,-1,10,1001,10,1,10,4,10,1008,8,1,10,4,10,102,1,8,161,2,101,14,10,1006,0,43,1006,0,77,3,8,102,-1,8,10,1001,10,1,10,4,10,1008,8,0,10,4,10,102,1,8,193,2,101,12,10,2,109,18,10,1,1009,13,10,3,8,102,-1,8,10,101,1,10,10,4,10,108,1,8,10,4,10,102,1,8,226,1,1103,1,10,1,1007,16,10,1,3,4,10,1006,0,88,3,8,102,-1,8,10,101,1,10,10,4,10,108,1,8,10,4,10,1001,8,0,263,1006,0,50,2,1108,17,10,1006,0,36,1,9,8,10,3,8,1002,8,-1,10,101,1,10,10,4,10,1008,8,0,10,4,10,1002,8,1,300,1006,0,22,2,106,2,10,2,1001,19,10,1,3,1,10,101,1,9,9,1007,9,925,10,1005,10,15,99,109,657,104,0,104,1,21101,0,937268454156,1,21102,1,352,0,1106,0,456,21101,0,666538713748,1,21102,363,1,0,1105,1,456,3,10,104,0,104,1,3,10,104,0,104,0,3,10,104,0,104,1,3,10,104,0,104,1,3,10,104,0,104,0,3,10,104,0,104,1,21101,3316845608,0,1,21102,1,410,0,1105,1,456,21101,0,209475103911,1,21101,421,0,0,1106,0,456,3,10,104,0,104,0,3,10,104,0,104,0,21101,0,984353603944,1,21101,444,0,0,1105,1,456,21102,1,988220752232,1,21102,1,455,0,1106,0,456,99,109,2,22101,0,-1,1,21102,40,1,2,21101,487,0,3,21101,0,477,0,1106,0,520,109,-2,2105,1,0,0,1,0,0,1,109,2,3,10,204,-1,1001,482,483,498,4,0,1001,482,1,482,108,4,482,10,1006,10,514,1102,0,1,482,109,-2,2105,1,0,0,109,4,2101,0,-1,519,1207,-3,0,10,1006,10,537,21101,0,0,-3,22101,0,-3,1,22101,0,-2,2,21102,1,1,3,21101,556,0,0,1106,0,561,109,-4,2106,0,0,109,5,1207,-3,1,10,1006,10,584,2207,-4,-2,10,1006,10,584,21201,-4,0,-4,1106,0,652,22101,0,-4,1,21201,-3,-1,2,21202,-2,2,3,21101,0,603,0,1105,1,561,22101,0,1,-4,21102,1,1,-1,2207,-4,-2,10,1006,10,622,21102,1,0,-1,22202,-2,-1,-2,2107,0,-3,10,1006,10,644,21201,-1,0,1,21101,644,0,0,105,1,519,21202,-2,-1,-2,22201,-4,-2,-4,109,-5,2106,0,0");


//$inputData = ("3,52,1001,52,-5,52,3,53,1,52,56,54,1007,54,5,55,1005,55,26,1001,54,-5,54,1105,1,12,1,53,54,53,1008,54,0,55,1001,55,1,55,2,53,55,53,4,53,1001,56,-1,56,1005,56,6,99,0,0,0,0,10");
//$inputData = ("109,1,204,-1,1001,100,1,100,1008,100,16,101,1006,101,0,99");
//$inputData = ("1102,34915192,34915192,7,4,7,99,0");
//$inputData = ("104,1125899906842624,99");
$arrayInfo = explode(",",$inputData);


$arrayLength = count($arrayInfo);

        
$array = implode(",", $arrayInfo);

$x = 0;
$y = 0;
$gridArray = array();
while($x < 50) {
    $gridArray[$x] = array();
    while($y < 50) {
        $gridArray[$x][$y] = '.';
        $y++;
    }
    $y = 0;
    $x++;
}


//117 is too low
$gridPositionX = 25;
$gridPositionY = 25;
$facing = 'N';
$orientation = new \Ds\Deque(['N', 'E', 'S', 'W']);
$processor1 = new processCode(0, $arrayInfo, 2);
$paintedPanels = array();
while($processor1->halted == 0) {
    if($gridArray[$gridPositionX][$gridPositionY] == "#") {
        $inputCode = 1;
    } else {
        $inputCode = 0; 
    }
    $processor1->updateInput($inputCode);
    $processor1->processCodeFunction();
    $outputValue1 = $processor1->output;
    if($outputValue1 == 1) {
        $gridArray[$gridPositionX][$gridPositionY] = "#";
        echo "paint white - ";
    } else {
        $gridArray[$gridPositionX][$gridPositionY] = ".";
        echo "paint black - ";
    }
    $paintedPanels[$gridPositionX.",".$gridPositionY] = 1;
    $processor1->processCodeFunction();
    $outputValue2 = $processor1->output;
    if($outputValue1 == 1) {
        // turn right 90 degrees
        $orientation->rotate(1);
        $currentOrt = $orientation->first();
        echo "turn right 90 degrees - $currentOrt :: $gridPositionX,$gridPositionY<br>";
    } else {
        // turn left 90 degrees
        $orientation->rotate(-1);
        $currentOrt = $orientation->first();
        echo "turn left 90 degrees - $currentOrt :: $gridPositionX,$gridPositionY<br>";
    }
    if($orientation->first() == 'N') {
        $gridPositionX--;
    } elseif($orientation->first() == 'S') {
        $gridPositionX++;
    } elseif($orientation->first() == 'E') {
        $gridPositionY++;
    } elseif($orientation->first() == 'W') {
        $gridPositionY--;
    }

}
$paintedPanelsCount = count($paintedPanels);
echo "Painted a total of $paintedPanelsCount panels<br>";
printGrid($gridArray);

function printGrid($trackGridInputArray) {
    echo "<code>";
    foreach($trackGridInputArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $gridData){
            if($gridData==" ") $gridData = "&nbsp;";
            echo "$gridData ";
        }
        echo "<br>";
    }
    echo "</code>";
}
   //$outputValue = processCode(0,$arrayInfo);
    
   //echo "Output: $outputValue1";
           
        
 class processCode {  

    public $output;
    public $inputCode;
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
        $this->phaseCode = $phaseCode;
        $this->processorMemory = $processorMemory;
        $this->processorPosition = 0;
        $this->processorID = $processorID;
       // echo "<br>Starting processing. With position:".$this->inputCode."<br>";
    }
    
    function updateInput($inputCode) {
        $this->inputCode = $inputCode;
    }
    
    function getReference($positionMode,$offset) {        
        $arrayLength = count($this->processorMemory);
        if($positionMode==1) {
            $value = $this->processorMemory[$this->processorPosition+$offset];
        } elseif($positionMode==2) {
            $positionValue = $this->relativeBase + $this->processorMemory[$this->processorPosition+$offset];
            $value = $this->processorMemory[$positionValue];
        } else {
            $positionValue = $this->processorMemory[$this->processorPosition+$offset];
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
            $this->inputValue = $this->inputCode;
        } 
        if($this->inputValueRequest == 1 && $this->processorID == 1) {
            $this->inputValue = 0;
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
        $this->inputValue = 1;
        $this->updateInputReference();
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

