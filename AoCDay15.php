<?php
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("3,1033,1008,1033,1,1032,1005,1032,31,1008,1033,2,1032,1005,1032,58,1008,1033,3,1032,1005,1032,81,1008,1033,4,1032,1005,1032,104,99,102,1,1034,1039,1002,1036,1,1041,1001,1035,-1,1040,1008,1038,0,1043,102,-1,1043,1032,1,1037,1032,1042,1105,1,124,102,1,1034,1039,101,0,1036,1041,1001,1035,1,1040,1008,1038,0,1043,1,1037,1038,1042,1105,1,124,1001,1034,-1,1039,1008,1036,0,1041,101,0,1035,1040,1001,1038,0,1043,101,0,1037,1042,1105,1,124,1001,1034,1,1039,1008,1036,0,1041,101,0,1035,1040,101,0,1038,1043,101,0,1037,1042,1006,1039,217,1006,1040,217,1008,1039,40,1032,1005,1032,217,1008,1040,40,1032,1005,1032,217,1008,1039,5,1032,1006,1032,165,1008,1040,9,1032,1006,1032,165,1102,1,2,1044,1105,1,224,2,1041,1043,1032,1006,1032,179,1102,1,1,1044,1105,1,224,1,1041,1043,1032,1006,1032,217,1,1042,1043,1032,1001,1032,-1,1032,1002,1032,39,1032,1,1032,1039,1032,101,-1,1032,1032,101,252,1032,211,1007,0,73,1044,1106,0,224,1101,0,0,1044,1106,0,224,1006,1044,247,101,0,1039,1034,1002,1040,1,1035,1002,1041,1,1036,1002,1043,1,1038,101,0,1042,1037,4,1044,1105,1,0,43,57,94,36,95,30,10,40,88,72,99,97,53,21,87,48,77,40,75,69,46,98,78,22,21,38,17,12,96,34,94,81,18,49,92,1,26,67,48,15,80,51,60,92,9,77,89,64,15,85,53,94,84,99,70,7,8,69,79,79,41,62,98,22,94,92,69,97,65,96,47,99,71,4,75,10,89,85,13,89,93,93,33,46,80,61,80,75,47,99,54,63,54,57,99,80,97,77,48,33,97,95,92,20,75,3,90,84,1,50,15,94,80,95,93,70,22,3,74,69,27,99,91,66,99,1,67,12,94,31,78,83,51,97,25,4,92,85,3,96,60,5,98,69,23,95,70,92,99,1,5,84,51,87,60,67,56,98,44,80,71,81,59,58,97,82,48,87,4,76,87,45,23,75,62,89,29,37,83,22,89,81,48,64,92,30,13,90,89,83,50,49,14,89,2,34,39,84,88,21,1,81,41,74,95,89,37,82,30,87,11,93,78,67,99,8,95,84,26,93,9,95,7,18,93,94,55,96,50,92,97,43,88,53,22,91,91,35,5,79,34,66,56,24,95,49,86,72,98,52,19,81,10,90,78,12,76,8,37,87,62,80,98,52,19,40,97,83,70,18,94,77,62,87,13,35,90,35,78,68,84,89,77,13,71,19,81,54,96,88,22,40,99,24,62,85,37,95,97,89,64,30,18,98,95,9,27,76,85,49,99,31,55,71,89,95,86,94,69,24,98,32,84,99,72,82,89,61,75,30,90,74,10,71,14,80,55,68,61,99,54,84,49,17,74,83,79,38,25,90,38,99,36,89,14,38,80,71,92,10,4,65,35,78,95,40,36,78,13,39,83,76,82,64,16,96,95,31,75,95,79,2,89,38,36,87,36,76,81,38,42,92,38,7,83,87,83,87,54,96,99,78,50,43,94,96,41,87,77,8,90,78,72,79,49,82,82,56,13,94,34,90,44,82,22,60,96,48,97,2,88,87,47,92,40,91,4,58,93,29,61,83,98,99,7,8,91,30,15,88,20,90,79,10,93,31,41,95,94,56,94,95,70,93,50,94,40,37,42,84,45,35,59,27,75,80,52,90,93,15,21,92,18,52,96,83,1,90,86,12,79,21,38,98,13,74,99,40,85,41,60,94,54,44,98,83,35,57,76,66,94,94,59,82,62,77,76,22,87,39,95,98,5,90,60,88,46,91,23,58,16,83,79,7,99,11,53,76,12,88,96,88,35,58,63,81,12,26,79,89,79,26,28,23,5,90,1,76,85,55,74,44,42,88,78,36,83,61,86,92,37,62,82,80,60,46,78,32,76,20,56,77,81,9,40,45,81,85,46,7,65,96,90,19,83,16,78,66,25,24,87,80,55,93,71,84,21,86,38,79,80,94,11,42,81,89,56,18,81,33,86,72,48,86,90,59,10,92,35,77,39,94,58,97,36,5,90,96,87,40,21,22,74,80,42,32,59,60,96,25,26,95,54,90,54,15,18,98,61,91,58,84,2,19,83,36,87,60,99,63,34,79,84,92,25,74,62,6,76,84,33,80,54,91,84,3,83,95,34,22,92,88,6,88,93,17,87,59,95,17,98,65,24,20,90,95,31,74,93,30,66,80,79,72,98,7,74,34,87,77,3,24,4,82,93,42,53,90,47,82,65,65,16,75,91,79,20,93,77,54,71,81,47,82,18,78,94,92,63,75,36,87,34,87,31,92,29,98,22,80,95,91,17,97,35,79,87,87,61,93,93,99,63,95,36,90,78,77,61,83,0,0,21,21,1,10,1,0,0,0,0,0,0");

$arrayInfo = explode(",",$input);
$arrayLength = count($arrayInfo);
       

$grid = array();

$processor1 = new processCode(0, $arrayInfo, 2);
$currentX = $startingX = 25;
$currentY = $startingY = 25;
$inputInstruction = 1;
$iterations = 0;
$finalX = $finalY = 0;


$x = 0;
$y = 0;
while($x <= 50) {
    while($y <= 50) {
            $grid[$x][$y] = '+';
        $y++;
    }
    $y = 0;
    $x++;
}

$gridOfLocations = array();

while($processor1->halted == 0) {
    
    // North = 1, south = 2, west = 3, east = 4
    // 0 - hit wall, 1 - moved in direction, 2 moved in a direction, found the oxygen system
    $processor1->updateInput($inputInstruction);
    $processor1->processCodeFunction();
    $statusUpdate = $processor1->output;
    $modifiedX = 0;
    if($inputInstruction==1) {
        $modifiedX = -1;
    } elseif($inputInstruction==2) {
        $modifiedX = 1;
    }
    $modifiedY = 0;
    if($inputInstruction==3) {
        $modifiedY = -1;
    } elseif($inputInstruction==4) {
        $modifiedY = 1;
    }
    if($statusUpdate==0) {
        $currentXBlocked = $currentX + $modifiedX;
        $currentYBlocked = $currentY + $modifiedY;
        //echo "Blocked: $currentXBlocked,$currentYBlocked :: $currentX + $modifiedX :::: $currentY + $modifiedY<br>";
        $grid[$currentXBlocked][$currentYBlocked] = "#";
        $gridOfLocations[$currentXBlocked.",".$currentYBlocked] = "#";
        $inputInstruction = rand(1,4);
        //$inputInstruction++;
       // if($inputInstruction>4) {
           // $inputInstruction = 1;
       // }
        // if($inputInstruction==1) {
        //     $modifiedX = -1;
        // } elseif($inputInstruction==2) {
        //     $modifiedX = 1;
        // } elseif($inputInstruction==3) {
        //     $modifiedY = -1;
        // } elseif($inputInstruction==4) {
        //     $modifiedY = 1;
        // }
    } elseif($statusUpdate==1) {
        $currentX = $currentX + $modifiedX;
        $currentY = $currentY + $modifiedY;
        //echo "Moved into: $currentX,$currentY :: $currentX + $modifiedX :::: $currentY + $modifiedY<br>";
        $grid[$currentX][$currentY] = '.';
        $gridOfLocations[$currentX][$currentY] = '.';
        
        $inputInstruction = rand(1,4);

    } elseif($statusUpdate==2) {
      
        $currentX = $currentX + $modifiedX;
        $currentY = $currentY + $modifiedY;
        $finalX = $currentX + $modifiedX;
        $finalY = $currentY + $modifiedY;
        $grid[$finalX][$finalY] = 'O';
        
        $inputInstruction = rand(1,4);
        //echo "FOUND OXYGEN<br><br>";
        //break;
    }
    //echo "$currentX,$currentY :: $statusUpdate<br>";
    
    if($iterations > 500000) break;
    $iterations++;
}

        $grid[$startingX][$startingY] = 'X';
printGrid($grid);

$minimalMoves = ($startingX-$finalX) + ($startingY-$finalY);

echo "<br><br>Found the oxygen at $finalX,$finalY :: Started at $startingX,$startingY so shortest number of moves would be $minimalMoves<br>";

//echo "<br><br>Total number of block walls: $blockWalls - current score is $currentScore";

// 19210 done

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
        $this->inputCode = $phaseCode;
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
