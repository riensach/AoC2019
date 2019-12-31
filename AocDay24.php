<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$inputData = (".#..#
.#.#.
#..##
.#.##
##..#");

/*$inputData = ("....#
#..#.
#..##
..#..
#....");
 * 
 */

$arrayInfo = explode("\n",$inputData);

$bugsGrid = array();


foreach($arrayInfo as $key => $value) {
    $items = str_split($value);
    foreach($items as $key2 => $value2) {
        if($value2=='.' || $value2 =='#') {
            $bugsGrid[$key][$key2] = $value2;            
        }
    }
}

echo "Starting position<br>";
printGrid($bugsGrid);

$savedGrids = array();

$tempBugs = array();
$count = 1;
$savedInformation = '';
while(true) {
    
    $x = $y = 0;
    $columnsCount = 5;
    $rowsCount = 5;
    $tempBugs = $bugsGrid;
    while($x < $columnsCount) {
        while($y < $rowsCount) {
            
            $bugAbove = isset($bugsGrid[$x-1][$y]) ? ($bugsGrid[$x-1][$y]=='#' ? 1:0):0;
            $bugBelow = isset($bugsGrid[$x+1][$y]) ? ($bugsGrid[$x+1][$y]=='#' ? 1:0):0;
            $bugLeft = isset($bugsGrid[$x][$y-1]) ? ($bugsGrid[$x][$y-1]=='#' ? 1:0):0;
            $bugRight = isset($bugsGrid[$x][$y+1]) ? ($bugsGrid[$x][$y+1]=='#' ? 1:0):0;
            $bugCount = $bugAbove + $bugBelow + $bugLeft + $bugRight;
            if($bugsGrid[$x][$y]=='#' && $bugCount <> 1) {
                $tempBugs[$x][$y] = '.';
            }
            if($bugsGrid[$x][$y]=='.' && ($bugCount == 1 || $bugCount == 2)) {
                $tempBugs[$x][$y] = '#';
            }
            
            $y++;
        }
        $y = 0;
        $x++;
    }
    $bugsGrid = $tempBugs;
    echo "Count $count<br>"; 
    
    $savedInformation = saveGrid($bugsGrid); 
    $repeated = checkRepeat($savedInformation, $savedGrids);
    if($repeated) {
        echo "Repeated grid<br>";
        printGrid($bugsGrid);
        break;
    }
    $savedGrids[] = $savedInformation;
    
    
        flush();
        ob_flush();
    $count++;   
    
    
}

   
$totalValue = 0;
$count = 1;
//$powers = [1,2,4,8,16,32,64,128,256,512,1024,2048,4096,8192,16384,32768,65536,131072,262144,524288,1048576,2097152,4194304,8388608,16777216];
foreach($bugsGrid as $rowID => $rowColumn) {
    foreach ($rowColumn as $columnID => $gridData){
        if($gridData=="#") {
            //echo "$count - $rowID - $columnID - power: ".$powers[$count-1]."<Br>";
            $totalValue += pow(2,$count-1);
            //$totalValue += $powers[$count-1];
        }
           // echo "$count - $rowID - $columnID - $gridData<Br>";
        $count++;
    }
}


echo "Total power: $totalValue<br>";









function saveGrid($trackGridInputArray) {
    $savedInformation = null;
    foreach($trackGridInputArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $gridData){
            $savedInformation .= $gridData;
        }
    }
    return $savedInformation;
}


function checkRepeat($savedInformation, &$savedGrids) {
    return array_search($savedInformation, $savedGrids);
}





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
