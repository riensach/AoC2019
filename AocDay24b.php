<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$inputData = (".#..#
.#.#.
#.?##
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

for($levels = 0;$levels < 500;$levels++) {
    foreach($arrayInfo as $key => $value) {
        $items = str_split($value);
       // var_dump($items);
        foreach($items as $key2 => $value2) {
            if(($value2=='.' || $value2 =='#' || $value2 =='?') && $levels == 250) {
                $bugsGrid[$levels][$key][$key2] = $value2;            
            } elseif($key == 2 && $key2 == 2) { //Hacking it in
                $bugsGrid[$levels][$key][$key2] = '?'; 
            } elseif($levels <> 250 && $key2 < 5) { //Hacking it in
                $bugsGrid[$levels][$key][$key2] = '.'; 
            }
        }
    }
}

var_dump($arrayInfo);

echo "Starting position<br>";
//printGrid($bugsGrid,250);

$tempBugs = array();
$savedInformation = '';
$iterator = 0;
while($iterator < 200) {
    
    $x = $y = 0;
    $columnsCount = 5;
    $rowsCount = 5;
    $tempBugs = $bugsGrid;
    for($levels = 1;$levels < 499;$levels++) {
        $x = $y = 0;
        while($x < $columnsCount) {
            while($y < $rowsCount) {
                
                $bugAbove = isset($bugsGrid[$levels][$x-1][$y]) ? ($bugsGrid[$levels][$x-1][$y]=='#' ? 1:0):0;
                $bugBelow = isset($bugsGrid[$levels][$x+1][$y]) ? ($bugsGrid[$levels][$x+1][$y]=='#' ? 1:0):0;
                $bugLeft = isset($bugsGrid[$levels][$x][$y-1]) ? ($bugsGrid[$levels][$x][$y-1]=='#' ? 1:0):0;
                $bugRight = isset($bugsGrid[$levels][$x][$y+1]) ? ($bugsGrid[$levels][$x][$y+1]=='#' ? 1:0):0;
                
                $gridBelowAbove = isset($bugsGrid[$levels][$x-1][$y]) ? ($bugsGrid[$levels][$x-1][$y]=='?' ? 1:0):0;
                $gridBelowBelow = isset($bugsGrid[$levels][$x+1][$y]) ? ($bugsGrid[$levels][$x+1][$y]=='?' ? 1:0):0;
                $gridBelowLeft = isset($bugsGrid[$levels][$x][$y-1]) ? ($bugsGrid[$levels][$x][$y-1]=='?' ? 1:0):0;
                $gridBelowRight = isset($bugsGrid[$levels][$x][$y+1]) ? ($bugsGrid[$levels][$x][$y+1]=='?' ? 1:0):0;
                
                $recursiveBelow = $gridBelowAbove + $gridBelowBelow + $gridBelowLeft + $gridBelowRight;
                $bugBelowAbove = $bugBelowBelow = $bugBelowLeft = $bugBelowRight = $bugBelowCenter = 0;
                if($recursiveBelow > 0) {
                    // We need to get the 5 bugs on the grid below, 1,2 :: 2,1 :: 2,2, :: 2,3 :: 3,2
                    $bugBelowAbove = ($bugsGrid[$levels-1][1][2]=='#' ? 1:0);
                    $bugBelowBelow = ($bugsGrid[$levels-1][2][1]=='#' ? 1:0);
                    $bugBelowLeft = ($bugsGrid[$levels-1][2][2]=='#' ? 1:0);
                    $bugBelowRight = ($bugsGrid[$levels-1][2][3]=='#' ? 1:0);
                    $bugBelowCenter = ($bugsGrid[$levels-1][3][2]=='#' ? 1:0);
                }
                
                $bugAboveAbove = !isset($bugsGrid[$levels][$x-1][$y]) ? ($bugsGrid[$levels+1][2][1]=='#' ? 1:0):0;
                $bugAboveBelow = !isset($bugsGrid[$levels][$x+1][$y]) ? ($bugsGrid[$levels+1][2][3]=='#' ? 1:0):0;
                $bugAboveLeft = !isset($bugsGrid[$levels][$x][$y-1]) ? ($bugsGrid[$levels+1][3][2]=='#' ? 1:0):0;
                $bugAboveRight = !isset($bugsGrid[$levels][$x][$y+1]) ? ($bugsGrid[$levels+1][1][2]=='#' ? 1:0):0;
                
                $bugCount = $bugAbove + $bugBelow + $bugLeft + $bugRight + $bugAboveAbove + $bugAboveBelow + $bugAboveLeft + $bugAboveRight + $bugBelowAbove + $bugBelowBelow + $bugBelowLeft + $bugBelowRight + $bugBelowCenter;
                if($bugsGrid[$levels][$x][$y]=='#' && $bugCount <> 1) {
                    $tempBugs[$levels][$x][$y] = '.';
                }
                if($bugsGrid[$levels][$x][$y]=='.' && ($bugCount == 1 || $bugCount == 2)) {
                    $tempBugs[$levels][$x][$y] = '#';
                    if($levels<>250) {
                       // echo "something";
                    }
                }
                if($bugsGrid[$levels][$x][$y]=='.') {

                       // echo "level $levels - $x,$y - $bugCount<br>";

                }

                $y++;
            }
            $y = 0;
            $x++;
        }
        if($levels==252) {            
            printGrid($tempBugs,$levels);
        }
    }
    $bugsGrid = $tempBugs;
    echo "Iteration $iterator<br>"; 
    
    
    flush();
    ob_flush();
    $iterator++;   
    
    
}
// 1118 is too low
// 983 is too low
   
$totalBugs = 0;
foreach($bugsGrid as $levelID => $bugsGrid) {
    foreach($bugsGrid as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $gridData){
            if($gridData=="#") {
                $totalBugs++;
            }
        }
    }
}


echo "Total bugs: $totalBugs<br>";




function printGrid($trackGridInputArray,$levelID) {
    echo '<code>';
    foreach($trackGridInputArray[$levelID] as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $gridData){
            if($gridData==" ") $gridData = "&nbsp;";
            echo "$gridData ";
        }
        echo "<br>";
    }
    echo '</code>';
}
