<?php
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("109,2050,21102,1,966,1,21102,1,13,0,1106,0,1378,21101,20,0,0,1106,0,1337,21101,27,0,0,1106,0,1279,1208,1,65,748,1005,748,73,1208,1,79,748,1005,748,110,1208,1,78,748,1005,748,132,1208,1,87,748,1005,748,169,1208,1,82,748,1005,748,239,21101,0,1041,1,21101,0,73,0,1106,0,1421,21102,78,1,1,21101,0,1041,2,21102,1,88,0,1106,0,1301,21102,1,68,1,21102,1,1041,2,21102,1,103,0,1106,0,1301,1102,1,1,750,1106,0,298,21102,82,1,1,21102,1041,1,2,21102,125,1,0,1105,1,1301,1102,2,1,750,1106,0,298,21102,1,79,1,21101,0,1041,2,21101,147,0,0,1105,1,1301,21102,84,1,1,21101,1041,0,2,21102,1,162,0,1106,0,1301,1102,1,3,750,1106,0,298,21101,0,65,1,21101,1041,0,2,21101,0,184,0,1105,1,1301,21102,76,1,1,21101,0,1041,2,21101,0,199,0,1106,0,1301,21101,75,0,1,21102,1041,1,2,21102,214,1,0,1106,0,1301,21101,0,221,0,1106,0,1337,21101,0,10,1,21102,1,1041,2,21101,0,236,0,1105,1,1301,1106,0,553,21102,85,1,1,21102,1041,1,2,21102,1,254,0,1106,0,1301,21101,0,78,1,21101,1041,0,2,21101,269,0,0,1105,1,1301,21101,0,276,0,1106,0,1337,21101,0,10,1,21101,0,1041,2,21101,291,0,0,1105,1,1301,1102,1,1,755,1106,0,553,21102,32,1,1,21102,1,1041,2,21102,313,1,0,1105,1,1301,21102,1,320,0,1106,0,1337,21101,0,327,0,1105,1,1279,1202,1,1,749,21101,0,65,2,21102,73,1,3,21102,1,346,0,1106,0,1889,1206,1,367,1007,749,69,748,1005,748,360,1101,1,0,756,1001,749,-64,751,1105,1,406,1008,749,74,748,1006,748,381,1101,0,-1,751,1105,1,406,1008,749,84,748,1006,748,395,1101,-2,0,751,1106,0,406,21101,0,1100,1,21101,0,406,0,1105,1,1421,21102,32,1,1,21101,0,1100,2,21101,421,0,0,1105,1,1301,21102,428,1,0,1105,1,1337,21102,435,1,0,1106,0,1279,1202,1,1,749,1008,749,74,748,1006,748,453,1102,1,-1,752,1105,1,478,1008,749,84,748,1006,748,467,1102,-2,1,752,1106,0,478,21101,1168,0,1,21101,478,0,0,1105,1,1421,21101,0,485,0,1105,1,1337,21102,1,10,1,21102,1168,1,2,21102,500,1,0,1105,1,1301,1007,920,15,748,1005,748,518,21101,1209,0,1,21101,518,0,0,1106,0,1421,1002,920,3,529,1001,529,921,529,101,0,750,0,1001,529,1,537,1002,751,1,0,1001,537,1,545,102,1,752,0,1001,920,1,920,1106,0,13,1005,755,577,1006,756,570,21102,1100,1,1,21101,570,0,0,1105,1,1421,21101,0,987,1,1105,1,581,21101,1001,0,1,21101,588,0,0,1105,1,1378,1101,0,758,593,1002,0,1,753,1006,753,654,21002,753,1,1,21101,610,0,0,1105,1,667,21102,1,0,1,21101,621,0,0,1105,1,1463,1205,1,647,21102,1,1015,1,21101,0,635,0,1105,1,1378,21101,1,0,1,21101,0,646,0,1106,0,1463,99,1001,593,1,593,1105,1,592,1006,755,664,1101,0,0,755,1106,0,647,4,754,99,109,2,1101,0,726,757,21201,-1,0,1,21101,0,9,2,21101,697,0,3,21101,692,0,0,1106,0,1913,109,-2,2106,0,0,109,2,101,0,757,706,2102,1,-1,0,1001,757,1,757,109,-2,2106,0,0,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,255,63,95,127,223,191,159,0,206,203,204,186,222,79,214,178,111,253,125,110,38,175,230,138,236,115,139,57,49,122,254,61,226,34,231,190,56,184,50,248,237,114,103,42,70,163,158,182,153,136,77,215,58,107,205,249,219,106,78,92,167,140,220,68,232,126,100,174,244,121,243,141,102,187,181,251,113,84,54,168,157,229,85,218,53,123,170,142,199,213,246,227,216,60,109,94,179,93,124,120,69,108,241,228,185,156,35,43,87,169,198,166,245,233,117,162,177,62,143,154,86,152,118,202,212,116,173,55,201,76,39,47,235,221,46,197,189,101,239,217,196,252,137,200,247,172,171,234,99,250,207,119,155,71,51,188,98,183,59,238,242,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,20,73,110,112,117,116,32,105,110,115,116,114,117,99,116,105,111,110,115,58,10,13,10,87,97,108,107,105,110,103,46,46,46,10,10,13,10,82,117,110,110,105,110,103,46,46,46,10,10,25,10,68,105,100,110,39,116,32,109,97,107,101,32,105,116,32,97,99,114,111,115,115,58,10,10,58,73,110,118,97,108,105,100,32,111,112,101,114,97,116,105,111,110,59,32,101,120,112,101,99,116,101,100,32,115,111,109,101,116,104,105,110,103,32,108,105,107,101,32,65,78,68,44,32,79,82,44,32,111,114,32,78,79,84,67,73,110,118,97,108,105,100,32,102,105,114,115,116,32,97,114,103,117,109,101,110,116,59,32,101,120,112,101,99,116,101,100,32,115,111,109,101,116,104,105,110,103,32,108,105,107,101,32,65,44,32,66,44,32,67,44,32,68,44,32,74,44,32,111,114,32,84,40,73,110,118,97,108,105,100,32,115,101,99,111,110,100,32,97,114,103,117,109,101,110,116,59,32,101,120,112,101,99,116,101,100,32,74,32,111,114,32,84,52,79,117,116,32,111,102,32,109,101,109,111,114,121,59,32,97,116,32,109,111,115,116,32,49,53,32,105,110,115,116,114,117,99,116,105,111,110,115,32,99,97,110,32,98,101,32,115,116,111,114,101,100,0,109,1,1005,1262,1270,3,1262,20102,1,1262,0,109,-1,2106,0,0,109,1,21101,1288,0,0,1105,1,1263,21002,1262,1,0,1102,0,1,1262,109,-1,2106,0,0,109,5,21102,1310,1,0,1105,1,1279,21202,1,1,-2,22208,-2,-4,-1,1205,-1,1332,21202,-3,1,1,21101,0,1332,0,1105,1,1421,109,-5,2105,1,0,109,2,21102,1346,1,0,1105,1,1263,21208,1,32,-1,1205,-1,1363,21208,1,9,-1,1205,-1,1363,1106,0,1373,21101,0,1370,0,1106,0,1279,1106,0,1339,109,-2,2105,1,0,109,5,1202,-4,1,1385,21001,0,0,-2,22101,1,-4,-4,21102,0,1,-3,22208,-3,-2,-1,1205,-1,1416,2201,-4,-3,1408,4,0,21201,-3,1,-3,1106,0,1396,109,-5,2106,0,0,109,2,104,10,21201,-1,0,1,21102,1436,1,0,1106,0,1378,104,10,99,109,-2,2105,1,0,109,3,20002,593,753,-1,22202,-1,-2,-1,201,-1,754,754,109,-3,2106,0,0,109,10,21102,1,5,-5,21102,1,1,-4,21101,0,0,-3,1206,-9,1555,21101,3,0,-6,21102,1,5,-7,22208,-7,-5,-8,1206,-8,1507,22208,-6,-4,-8,1206,-8,1507,104,64,1105,1,1529,1205,-6,1527,1201,-7,716,1515,21002,0,-11,-8,21201,-8,46,-8,204,-8,1105,1,1529,104,46,21201,-7,1,-7,21207,-7,22,-8,1205,-8,1488,104,10,21201,-6,-1,-6,21207,-6,0,-8,1206,-8,1484,104,10,21207,-4,1,-8,1206,-8,1569,21102,0,1,-9,1105,1,1689,21208,-5,21,-8,1206,-8,1583,21101,1,0,-9,1105,1,1689,1201,-5,716,1589,20102,1,0,-2,21208,-4,1,-1,22202,-2,-1,-1,1205,-2,1613,22102,1,-5,1,21101,1613,0,0,1106,0,1444,1206,-1,1634,22101,0,-5,1,21102,1627,1,0,1106,0,1694,1206,1,1634,21102,2,1,-3,22107,1,-4,-8,22201,-1,-8,-8,1206,-8,1649,21201,-5,1,-5,1206,-3,1663,21201,-3,-1,-3,21201,-4,1,-4,1106,0,1667,21201,-4,-1,-4,21208,-4,0,-1,1201,-5,716,1676,22002,0,-1,-1,1206,-1,1686,21102,1,1,-4,1105,1,1477,109,-10,2106,0,0,109,11,21102,1,0,-6,21102,1,0,-8,21101,0,0,-7,20208,-6,920,-9,1205,-9,1880,21202,-6,3,-9,1201,-9,921,1725,20101,0,0,-5,1001,1725,1,1732,21001,0,0,-4,21201,-4,0,1,21101,0,1,2,21102,9,1,3,21101,1754,0,0,1105,1,1889,1206,1,1772,2201,-10,-4,1767,1001,1767,716,1767,20102,1,0,-3,1106,0,1790,21208,-4,-1,-9,1206,-9,1786,22102,1,-8,-3,1106,0,1790,22101,0,-7,-3,1001,1732,1,1795,21001,0,0,-2,21208,-2,-1,-9,1206,-9,1812,22101,0,-8,-1,1106,0,1816,21202,-7,1,-1,21208,-5,1,-9,1205,-9,1837,21208,-5,2,-9,1205,-9,1844,21208,-3,0,-1,1106,0,1855,22202,-3,-1,-1,1106,0,1855,22201,-3,-1,-1,22107,0,-1,-1,1105,1,1855,21208,-2,-1,-9,1206,-9,1869,22102,1,-1,-8,1106,0,1873,21201,-1,0,-7,21201,-6,1,-6,1106,0,1708,22102,1,-8,-10,109,-11,2106,0,0,109,7,22207,-6,-5,-3,22207,-4,-6,-2,22201,-3,-2,-1,21208,-1,0,-6,109,-7,2106,0,0,0,109,5,2101,0,-2,1912,21207,-4,0,-1,1206,-1,1930,21102,1,0,-4,21202,-4,1,1,21201,-3,0,2,21102,1,1,3,21102,1,1949,0,1105,1,1954,109,-5,2105,1,0,109,6,21207,-4,1,-1,1206,-1,1977,22207,-5,-3,-1,1206,-1,1977,21202,-5,1,-5,1105,1,2045,22102,1,-5,1,21201,-4,-1,2,21202,-3,2,3,21101,1996,0,0,1105,1,1954,21202,1,1,-5,21102,1,1,-2,22207,-5,-3,-1,1206,-1,2015,21102,0,1,-2,22202,-3,-2,-3,22107,0,-4,-1,1206,-1,2037,21202,-2,1,1,21102,1,2037,0,106,0,1912,21202,-3,-1,-3,22201,-5,-3,-5,109,-6,2106,0,0");

$arrayInfo = explode(",",$input);
$arrayLength = count($arrayInfo);
       


//L,4,L,6,L,8,L,10,L,8,R,12,L,12,L,8,R,12,L,12,L,4,L,6,L,8,L,12,L,8,R,12,R,12,L,12,L,6,L,6,L,8,L,4,L,6,L,8,L,12,R,12,L,6,L,6,L,8,L,8,R,12,L,12,R,12,L,6,L,6,L,8


//L,4,L,6,L,8,L,12    ,L,8,R,12,L,12,    L,8,R,12,L,12,  L,4,L,6,L,8,L,12,   L,8,R,12,L,12,  R,12,L,6,L,6,L,8,   L,4,L,6,L,8,L,12,    R,12,L,6,L,6,L,8,    L,8,R,12,L,12,  R,12,L,6,L,6,L,8

// 46 = wrong; 10 = wrong
//A = L,4,L,6,L,8,L,12
//$functionA = '7644524476445444764456447644495010';

//B = L,8,R,12,L,12
//$functionB = '7644564482444950447644495010';

//C = R,12,L,6,L,6,L,8
//$functionC = '8244495044764454447644544476445610';

//A,B,B,A,B,C,A,C,B,C
//$mainFunction = '6544664466446544664467446544674466446710';
$functions[] = 'NOT C J'; // If 4 is gap, set temp to true
$functions[] = 'AND D J'; // If temp or jump is true, set jump to true#
$functions[] = 'AND H J';
$functions[] = 'NOT B T'; // If 3 is gap, set temp to true
$functions[] = 'AND D T';
$functions[] = 'OR T J'; // if temp or jump is true, set jump to true
$functions[] = 'NOT A T';
$functions[] = 'OR T J';



$asciiValues = array();
foreach($functions as $key => $value) {
    $values = str_split($value);
    foreach($values as $key2 => $value2) {
        $asciiValues[] = ord($value2);
    }
    $asciiValues[] = 10;
}

$asciiValues[] = ord('R');
$asciiValues[] = ord('U');
$asciiValues[] = ord('N');
$asciiValues[] = 10;
$asciiValues[] = 10;
var_dump($asciiValues);


$processor1 = new processCode(0, $arrayInfo, 2);


//$mainFunction = $mainFunction .$functionA . $functionB . $functionC . '11010';
//$processor1->updateMemory(0,2);
$processor1->halted = 0;
$processor1->updateInput($asciiValues);
//$processor1->updateInputs($mainFunction,$functionA,$functionB,$functionC,'11010');
echo "<code>";
while($processor1->halted == 0) {
    $processor1->processCodeFunction();
    $statusUpdate = $processor1->output;
    echo chr($statusUpdate);
    if($statusUpdate==10) {
        echo "<br>";
    }
}

echo "</code>";
echo "<br><br>Total hull damage: $statusUpdate<br>";




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
    public $inputCodeSecond;
    public $inputCodeThird;
    public $inputCodeFourth;
    public $inputCodeFifth;
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
    
    function updateMemory($position,$value) {
        $this->processorMemory[$position] = $value;
    }
    
    function updateInput($inputCode) {
        $this->inputCode = $inputCode;
    }
    
    function updateInputs($inputCode,$secondInputCode,$thirdInputCode,$fourthInputCode,$fifthInputCode) {
        $this->inputCode = $inputCode;
        $this->inputCodeSecond = $secondInputCode;
        $this->inputCodeThird = $thirdInputCode;
        $this->inputCodeFourth = $fourthInputCode;
        $this->inputCodeFifth = $fifthInputCode;
        
        //echo $this->inputCode . " - " . $this->inputCodeSecond . " - " . $this->inputCodeThird . " - " . $this->inputCodeFourth . " - " .$this->inputCodeFifth . "<Br>";
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
        $this->inputValue = $this->inputCode[$this->inputValueRequest];

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
        //echo "working on operation ". $this->operation . "<br>";
        if(!isset($this->positionMode1)) { $this->positionMode1 = 0; }
        if(!isset($this->positionMode2)){ $this->positionMode2 = 0; }
        if(!isset($this->positionMode3)){ $this->positionMode3 = 0; }
    }
    
    public function processCodeFunction() {
        $this->inputValue = $this->inputCode[$this->inputValueRequest];
        
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
