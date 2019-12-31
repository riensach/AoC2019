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
#.?##
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


echo "Starting position<br>";
printGrid($bugsGrid,250);

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
                
                $bugBelowAbove = $bugBelowBelow = $bugBelowLeft = $bugBelowRight = $bugBelowCenter = 0;
                if($gridBelowAbove == 1) {
                    $bugBelowAbove = ($bugsGrid[$levels-1][4][0]=='#' ? 1:0);
                    $bugBelowBelow = ($bugsGrid[$levels-1][4][1]=='#' ? 1:0);
                    $bugBelowLeft = ($bugsGrid[$levels-1][4][2]=='#' ? 1:0);
                    $bugBelowRight = ($bugsGrid[$levels-1][4][3]=='#' ? 1:0);
                    $bugBelowCenter = ($bugsGrid[$levels-1][4][4]=='#' ? 1:0);
                }
                if($gridBelowBelow == 1) {
                    $bugBelowAbove = ($bugsGrid[$levels-1][0][0]=='#' ? 1:0);
                    $bugBelowBelow = ($bugsGrid[$levels-1][0][1]=='#' ? 1:0);
                    $bugBelowLeft = ($bugsGrid[$levels-1][0][2]=='#' ? 1:0);
                    $bugBelowRight = ($bugsGrid[$levels-1][0][3]=='#' ? 1:0);
                    $bugBelowCenter = ($bugsGrid[$levels-1][0][4]=='#' ? 1:0);
                }
                if($gridBelowLeft == 1) {
                    $bugBelowAbove = ($bugsGrid[$levels-1][0][4]=='#' ? 1:0);
                    $bugBelowBelow = ($bugsGrid[$levels-1][1][4]=='#' ? 1:0);
                    $bugBelowLeft = ($bugsGrid[$levels-1][2][4]=='#' ? 1:0);
                    $bugBelowRight = ($bugsGrid[$levels-1][3][4]=='#' ? 1:0);
                    $bugBelowCenter = ($bugsGrid[$levels-1][4][4]=='#' ? 1:0);
                }
                if($gridBelowRight == 1) {
                    $bugBelowAbove = ($bugsGrid[$levels-1][0][0]=='#' ? 1:0);
                    $bugBelowBelow = ($bugsGrid[$levels-1][1][0]=='#' ? 1:0);
                    $bugBelowLeft = ($bugsGrid[$levels-1][2][0]=='#' ? 1:0);
                    $bugBelowRight = ($bugsGrid[$levels-1][3][0]=='#' ? 1:0);
                    $bugBelowCenter = ($bugsGrid[$levels-1][4][0]=='#' ? 1:0);
                }
                
                $bugAboveAbove = !isset($bugsGrid[$levels][$x-1][$y]) ? ($bugsGrid[$levels+1][1][2]=='#' ? 1:0):0;
                $bugAboveBelow = !isset($bugsGrid[$levels][$x+1][$y]) ? ($bugsGrid[$levels+1][3][2]=='#' ? 1:0):0;
                $bugAboveLeft = !isset($bugsGrid[$levels][$x][$y-1]) ? ($bugsGrid[$levels+1][2][1]=='#' ? 1:0):0;
                $bugAboveRight = !isset($bugsGrid[$levels][$x][$y+1]) ? ($bugsGrid[$levels+1][2][3]=='#' ? 1:0):0;
                
                $bugCount = $bugAbove + $bugBelow + $bugLeft + $bugRight + $bugAboveAbove + $bugAboveBelow + $bugAboveLeft + $bugAboveRight + $bugBelowAbove + $bugBelowBelow + $bugBelowLeft + $bugBelowRight + $bugBelowCenter;
                if($bugsGrid[$levels][$x][$y]=='#' && $bugCount <> 1) {
                    $tempBugs[$levels][$x][$y] = '.';
                }
                if($bugsGrid[$levels][$x][$y]=='.' && ($bugCount == 1 || $bugCount == 2)) {
                    $tempBugs[$levels][$x][$y] = '#';

                }


                $y++;
            }
            $y = 0;
            $x++;
        }
        if($levels==252) {            
            //printGrid($tempBugs,$levels);
        }
    }
    $bugsGrid = $tempBugs;
    echo "Iteration $iterator<br>"; 
    
    
    flush();
    ob_flush();
    $iterator++;   
    
    
}




echo "depth -5<br>";
printGrid($bugsGrid,255);
echo "depth -4<br>";
printGrid($bugsGrid,254);
echo "depth -3<br>";
printGrid($bugsGrid,253);
echo "depth -2<br>";
printGrid($bugsGrid,252);
echo "depth -1<br>";
printGrid($bugsGrid,251);
echo "depth 0<br>";
printGrid($bugsGrid,250);
echo "depth 1<br>";
printGrid($bugsGrid,249);
echo "depth 2<br>";
printGrid($bugsGrid,248);
echo "depth 3<br>";
printGrid($bugsGrid,247);
echo "depth 4<br>";
printGrid($bugsGrid,246);
echo "depth 5<br>";
printGrid($bugsGrid,245);
// 1118 is too low
// 983 is too low
// 1978 is too low
   
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
