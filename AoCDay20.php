<?php
ini_set('display_errors', 1);
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("                                         C   U A   Z     A   D         U   I         R                                       
                                         W   Y A   Z     U   Q         R   W         O                                       
  #######################################.###.#.###.#####.###.#########.###.#########.#####################################  
  #.........#.....#...#.....#.............#.......#.#.......#.....#.#...#.#...#.....#.#.#.#.#...#.#...#.....#...#...#.....#  
  #####.#.#.#.###.###.###.#############.#.#######.#.#.#.###.#####.#.#.###.#.#.#.#.###.#.#.#.###.#.#.###.#####.#####.#####.#  
  #.#...#.#.#.#...#.........#.#...#.#.#.#.#.......#...#.#.....#...#...#...#.#...#.#.#.#...#...#.#.#...#...#.....#.#.#.#...#  
  #.#######.#####.#######.###.#.###.#.#.#####.###.#####.#.#.#.###.#.###.#.#######.#.#.###.#.###.#.#.###.#####.###.#.#.###.#  
  #...#...#...#.#.#.#.#.....#.#.............#...#.#.....#.#.#.#.#.#...#.#.#.......#.........#.#.#.....#.....#.#.#.....#.#.#  
  ###.###.###.#.#.#.#.###.###.#######.#######.#########.###.###.#.#.###.###.###########.#.###.#.#.#####.#####.#.###.###.#.#  
  #.......#...............................#...#.#.......#...#.....#.#.#.......#.#.....#.#.#.#.#...........#.#.#.#...#.....#  
  ###.###.###.#.###.###.#####.###.#####.#####.#.#.#.#############.#.#.#####.###.###.#####.#.#.#.#####.#.#.#.#.#.###.#####.#  
  #...#.......#...#.#...#.....#.#.#.........#...#.#.......#...#...#...#.#.........#...#.#.#.......#...#.#.#.#...#.......#.#  
  #########.###.#####.#####.###.#####.#####.#.#######.#.###.#.###.#.###.#######.#.###.#.#.###.###.#########.###.#####.###.#  
  #.#.....#.#.#...#.#.#.#...#...#.......#...#.....#...#.#...#.#...#.......#.....#.#.....#.......#.....#.....#.....#.....#.#  
  #.###.#####.#.#.#.###.#.#####.#####.###.###.#.#.#####.###.#####.###.#.###.#########.#.#.#######.#.#####.#######.#.#####.#  
  #.#.#.....#.#.#.#.......#.#.#.........#.#...#.#.#...........#...#...#.#.#...#.......#.....#...#.#...#.#...#.#.#.........#  
  #.#.###.#.#.#####.###.#.#.#.#.#.#.#.#######.###########.#######.###.###.###.#####.#.###.#.#.#######.#.#.###.#.#####.###.#  
  #.....#.#...#...#...#.#.#...#.#.#.#.#.#.........#...#.....#.....#...#.......#.....#...#.#.....#.#...#.....#...#.#...#.#.#  
  #####.#####.###.#####.#####.#######.#.#.#####.#####.###.#######.#.#.###.#.#.#####.#######.#.#.#.#######.#####.#.###.#.###  
  #.....#.#.#...#...#.#.#.....#.#.....#...#.......#.#.........#...#.#...#.#.#.#...#.#.#.#.#.#.#.......#.....#.#...#.......#  
  #####.#.#.#.###.###.#######.#.#####.#####.#.#.#.#.#.###.#######.#.#####.#.#####.#.#.#.#.#####.#.#.#####.###.#.#####.#####  
  #.#.#.........#.#.#...#.............#...#.#.#.#.#...#.......#...#.....#.#.#.#.......#.....#.#.#.#...#.#...#...#.#.......#  
  #.#.#######.###.#.#.#####.###.#.###.#.###.#.#####.###.#.#####.#.#.#######.#.#######.#.#.#.#.###.###.#.#.#.#.#.#.###.###.#  
  #.......#.....#.......#.#.#.#.#.#.......#.#.#.#.#.#.#.#.....#.#.#.#.#.#.....#...#...#.#.#.#...#.#.#.#...#.#.#.....#...#.#  
  ###.#####.#.#####.#.#.#.#.#.#######.#######.#.#.###.###.#.#####.#.#.#.###.#####.#.###.#.###.#.#.#.#######.###.#######.###  
  #...#.#...#.#...#.#.#...#.#.#.#.#.#.#...#.#.#.#.#...#...#.#.#...#.......#.....#.......#.....#.#.#.....#.........#.......#  
  #.#.#.###.#####.###.#.#.###.#.#.#.#.###.#.#.#.#.###.###.###.###.###.#.#.#.#############.###########.#####.###.###.#.###.#  
  #.#.#...#...#.....#.#.#...#.#.#.#.#.#.#.....#...#.......#.....#...#.#.#.#.#.....#...#.......#.....#.....#.#.....#.#...#.#  
  ###.###.###.###.#.###.###.#.#.#.#.#.#.#####.#.#####.#.#.#.###.#.#######.#.###.#####.###.#####.#####.#.###.#####.###.#####  
  #.#.#...#.......#.#.#.#.....#...#.#.......#.....#...#.#.#.#.#...#.....#.#.#.......................#.#.#.#.#.#.#.#.....#.#  
  #.#.###.###.###.###.#.#.###.###.#.#######.#.#.#########.#.#.#####.###.#.#.#####.#.###.#.###########.###.###.#.#.###.###.#  
  #...#...#.#...#.#...#.#.#.....#...........#.#.....#.....#.....#.....#...#.....#.#.#...#.........#...#...#.#.....#.......#  
  #.#####.#.#.#######.#######.#######.###########.#####.#####.#####.#######.#########.###############.#.###.#.#.#.#.###.###  
  #.....#.....#.#.#.#.#.#.......#    C           Y     G     D     C       D         S      #...#.......#...#.#.#.....#...#  
  #.#####.#.#.#.#.#.#.#.###.#.#.#    S           J     O     X     W       N         I      #.#.#####.#.#.#######.#.#######  
  #.....#.#.#.#.#.....#.#.#.#.#.#                                                           #.#.#...#.#.......#...#.#......SF
  #.#####.###.#.#.###.#.#.###.#.#                                                           #.#####.###.###.#######.#####.#  
  #.....#.#...#...#.#.#.#.#.#.#.#                                                           #.#.#.#.#.....#.#.....#.......#  
  ###.#######.###.#.###.#.#.#.###                                                           #.#.#.#.###.#######.###.#####.#  
  #...#.#...#.#...#.#.#.....#.#.#                                                         DQ..........................#.#.#  
  #.#.#.###.#.#.###.#.#####.#.#.#                                                           #####.#.###.###.#.#.#####.#.###  
  #.#.#...#.......#.#.#.......#..BG                                                         #...#.#.#.#...#.#.#.#.#.#.#...#  
  #.#.#.#.#.###.#.#.#.#####.#.#.#                                                           ###.#####.#########.#.#.###.#.#  
CE..#...#.....#.#...........#...#                                                           #...#.....#.......#.#...#...#..ZN
  #####.###.#######.#####.#######                                                           #.#.#.###.#####.#####.#.###.#.#  
  #...#...#.....#...#...#.#.#.#..AU                                                       UR..#...#...............#.....#.#  
  #.#.###.#.#.###.#.#.#.#.#.#.#.#                                                           ###############.#############.#  
BG..#...#.#.#.#.#.#.#.#.#.#.....#                                                         UY..#.....#...#.#.#...........#.#  
  #.#.#########.#.###.#.###.###.#                                                           #.#.###.#.#.#.#####.#######.###  
  #.#.......#.#.#.#.#.#.....#...#                                                           #.#...#.#.#.............#.#.#..CS
  #.#####.###.#.###.#.#.###.#####                                                           #.###.#.#.###.###.#.#####.#.#.#  
  #...#...............#.#.#.#...#                                                           #.....#.#...#...#.#...#.#...#.#  
  #########.###.#.#######.###.###                                                           #######.#.#######.###.#.#.###.#  
  #.#.#...#.#.#.#.#.....#.....#..LU                                                         #...#.......#.#.#.#...#.#.....#  
  #.#.#.#####.###.###.###.###.#.#                                                           ###.#########.#.#######.#######  
  #.#.....#.#...#.#.........#...#                                                           #.....#...#.......#.........#..PM
  #.#.###.#.#.#########.###.###.#                                                           #.###.#.###.###.###.###.###.#.#  
  #.#.#.....#.#...#.#.#.#.#...#.#                                                           #.#.......#...#.......#...#....LU
  #.#####.#.#.#.#.#.#.#######.#.#                                                           #.#######.###.#####.###.#####.#  
DX........#.....#.............#.#                                                         GI....#.............#.#...#...#.#  
  #########.#.#####.#.###.#.#####                                                           #.###########.###.#######.#####  
  #.....#...#...#.#.#.#...#...#.#                                                         ZN..#.#...#.#.#.#.#...#.#.#...#.#  
  #.#.###.#.#.###.#############.#                                                           ###.###.#.#.###.#####.#.#.###.#  
DN..#...#.#.#.#.#.#.#.........#..UE                                                         #...........#.....#.....#.....#  
  #####.#.#####.#.#.###.#####.#.#                                                           #.#.#######.#.#.###.###.#.###.#  
  #.....#.#.#.#.#.....#.....#...#                                                         UN..#...#.......#.....#...#...#..CX
  #.#######.#.#.#.###.###.#.#####                                                           #.#####.###.#.#.#.###.#####.###  
  #.................#.....#.#...#                                                           #...#.#.#.#.#.#.#...#.....#...#  
  ###.#######.###############.###                                                           #####.###.#########.#.###.###.#  
  #.#.#.....#.#.................#                                                           #.#.#.#.#...#.#...#.#.#.#.....#  
  #.#####.#.###.#.#####.###.#####                                                           #.#.#.#.#.###.#.#######.#####.#  
YJ........#...#.#.#...#.#........XW                                                       PM..........#...#.#.#.....#...#.#  
  #.#.#######.#.###.###.#.#.#.#.#                                                           #.###.#.#####.#.#.#####.#.#####  
  #.#.#.#.....#...#.#.#.#.#.#.#.#                                                           #.#.#.#...#.......#.#.......#.#  
  #####.#.#.###.###.#.#.#######.#                                                           #.#.#.###########.#.###.#.###.#  
  #.#...#.#.....#.....#.#.#.#.#.#                                                           #.#.....#.#.#.#...#.#...#...#..XW
  #.###.###########.#####.#.#.#.#                                                           #######.#.#.#.###.#.#.#.###.#.#  
  #.....#.............#.......#.#                                                           #...#.................#...#...#  
  #.#.#.#.#.###.#.###.###.#.#####                                                           #.#######.###.###.###########.#  
  #.#.#...#...#.#.#...#.#.#.....#                                                         DI........#...#.#...#.........#.#  
  #.#.#.#.#####.#####.#.#.#.###.#                                                           #.###.#############.#####.#.###  
  #.#.#.#...#.#...#...#...#.#...#                                                           #.#.#.#...#...........#...#....UN
  #.#########.#.#####.#.#####.###                                                           #####.#.#.#.###.###.#.#.#.#.#.#  
GI........#.......#.....#........IW                                                         #.#...#.#.#.#.#...#.#.#.#.#.#.#  
  ###.#####.#####.###.#####.#.#.#                                                           #.#.###.#.#.#.#########.###.###  
  #.......#.#.....#.....#...#.#.#                                                           #.......#.........#.......#...#  
  #.#.#.#.#.#.#.#.#.#.###.#.###.#        C     C       C         S         R   J            ###.#.#.###.###.#####.#########  
  #.#.#.#.#.#.#.#.#.#...#.#.#.#.#        E     Z       X         F         O   W            #...#.#...#.#...#...#.......#.#  
  ###.###.#####.#####.#.#.#.#.#.#########.#####.#######.#########.#########.###.###############.#####.#.#####.#.#.#######.#  
  #...#...#.......#...#.#.#...#...#...#...#.#.......#...........#.....#.#.....#.#...#.#.#.........#.#.#.....#.#...........#  
  ###.###.###.#########.#.#.#.#.#.#.#.###.#.#####.#.###.#.###.#.#.###.#.#####.#.#.###.#.#####.###.#.###.#.#######.#####.#.#  
  #...#.....#.#.#...#.#.#.#.#.#.#.#.#.......#.#...#...#.#.#.#.#.#.#...#.......#...........#.....#.....#.#.#.....#...#.#.#.#  
  #.###.#.#.###.###.#.#.###########.#####.#.#.###.#.#####.#.#.#####.#.#.###.###.#.#.#.###########.#.###.#.###.#.#.#.#.#.###  
  #.#...#.#.#.#.............#.#...#.#.....#.#.....#.#.#.#.#.......#.#.#...#.#.#.#.#.#.#.......#...#.#.#.#.#...#...#.#.#.#.#  
  #.#####.###.###.#.###.###.#.#.#########.#####.#.###.#.#####.#####.#.#.###.#.###.#######.#####.#.#.#.#######.#####.#.###.#  
  #.#.#.......#.#.#.#.#...#.#.....#.#.......#...#...#...#.#...#.#...#.#...#.#...............#.#.#.#.......#...#...........#  
  #.#.###.###.#.#.#.#.#.#.#.#.###.#.###.#.#######.#.###.#.#.#.#.#####.#.#######.###########.#.#####.#####.###.#####.###.###  
  #.#.......#...#.#.#...#.#.#.#.........#.#.#.....#.......#.#...#.....#.....#.....#.#...#.........#.....#.#.......#...#...#  
  #####.#.#####.#####.###########.###.#.#.#.#######.#.#.#####.###.###.###.#####.#.#.#.#########.###.###.###########.###.###  
  #.....#...#.....#...#.#.#.#.....#...#.#...#.......#.#.#...#.#...#...#.......#.#.....#.......#.#.#...#.....#.#.......#...#  
  ###.#####.###.#####.#.#.#.#############.#######.###.###.#.#.#######.#.#.#########.#.#.###.#####.#####.#.###.#.###.###.#.#  
  #.......#.#...#...#.#.#.#.#.#...#.#.......#...#.#.#...#.#...#.#.#.#.#.#.....#...#.#.....#.#.#.....#.#.#.#.#.#.#.....#.#.#  
  #.#.#.#.###.#####.###.#.#.#.###.#.###.#.###.#.###.#.#######.#.#.#.#.#.#######.#.###.#.#.###.###.###.#####.#.#####.#.#####  
  #.#.#.#.#...#...........#...#...#.....#...#.#.#.#.#...#.......#.#.#.#.#...#.#.#.#...#.#.#.............#.#.#.#.#.#.#.....#  
  ###.#######.#####.#.#.#.#.#.###.#.###.###.#.###.#.#.#######.###.#.#.#.#.###.#.###.#.#######.###.#.#.###.#.#.#.#.#.#.#####  
  #.......#...#.....#.#.#.#.#.#.....#.....#.#...#.....#.....#...#.....#.#...#.#.....#.#...#...#...#.#.#.#.........#.#.....#  
  #.#.#####.#####.#.#####.###.#######.#.#####.#######.#.#####.###.#.###.#.###.#.#######.#####.###.#####.#.#.###.###.#.#.###  
  #.#.#.#.#.#.#...#.#.#...........#.#.#...........#.....#...#...#.#...#...#.#.............#.#...#.#.#.#.#.#.#.#...#.#.#...#  
  #.###.#.###.#####.#.#####.#######.#####.#####.#####.#####.#.###.#######.#.#.#######.#.###.#.#####.#.#.#.###.#.#######.#.#  
  #.#.....#.........#...#.#.#.......#.#.....#.....#...#.......#.....#.......#.#.#.....#...#.#.....#...........#.#.#.....#.#  
  #.#####.#######.###.#.#.#.#######.#.###.#####.#.###.#.#######.#######.#.#####.#.###.#.#.#.#.#####.#.###.###.###.#####.###  
  #.#...#...#.#.#.#.#.#.#.....................#.#.#...#.......#.#.#...#.#...#.......#.#.#...........#...#...#...#.........#  
  #.#.###.###.#.###.###.#.###.#.#########.#.###.#####.#######.#.#.#.###.#######.#.###.#.#.###.#####.###.###.###.###.#.#.###  
  #.#.#.........#.....#.....#.#.#.....#...#...#...#...#.......#.....#...#...#.#.#...#.#.#.#.#.....#.#.#.#.#.#.....#.#.#...#  
  ###.#.#.#.###.#####.###.###.#.#.#.#.###.#########.#####.#.#.#####.###.#.###.###.###.###.#.#.#.#####.###.#############.#.#  
  #.....#.#.#.#...#.......#...#.#.#.#.......#...#.......#.#.#...#.....#.#.#.....#...#.#...#...#...#.#.#.....#.#.#.....#.#.#  
  ###.###.###.#.#########.#####.#.#.#.#.#####.#######.###.#.#.#######.#.###.#.###.###########.#####.#.###.#.#.#.#.#.#.#.###  
  #.....#...#...............#...#.#.#.#.........#.....#...#.#...#.....#.....#.#.......#...................#.....#.#.#.....#  
  ###########################################.###.#######.#########.#########.###.#########################################  
                                             U   J       S         D         C   G                                           
                                             E   W       I         I         Z   O                                           ");

//175452 too low




$inputArray = explode("\n", $input);

$grid = array();
$keysFound = array();
foreach($inputArray as $key => $value) {
    $inputCells = str_split($value);
    
    foreach($inputCells as $key2 => $value2) {
        $grid[$key][$key2] = $value2;
        
        //findKeys
        
        
    }
}

foreach($grid as $key => $value) {
    foreach($value as $key2 => $value2) {
        if(ctype_alnum($value2)) {
            // Find the partner
            $valueAbove = isset($grid[$key-1][$key2]) ? ctype_alnum($grid[$key-1][$key2]):FALSE;
            $valueBelow = isset($grid[$key+1][$key2]) ? ctype_alnum($grid[$key+1][$key2]):FALSE;
            $valueLeft = isset($grid[$key][$key2-1]) ? ctype_alnum($grid[$key][$key2-1]):FALSE;
            $valueRight = isset($grid[$key][$key2+1]) ? ctype_alnum($grid[$key][$key2+1]):FALSE;
            
            //echo "$valueAbove-$valueBelow-$valueLeft-$valueRight :: $value2 :: $key - $key2<br>";
            if($valueAbove) {
                $isMazeBelow = isset($grid[$key+1][$key2]) ? (($grid[$key+1][$key2]=='.' || $grid[$key+1][$key2]=='#') ? 1:0):0;
                if($isMazeBelow) {
                    $newKey = $key + 1;
                    $keysFound[$newKey . ',' . $key2] = array('Key'=>$grid[$key-1][$key2] . $value2, 'Location'=>$newKey . ',' . $key2);                     
                } else {      
                    $newKey = $key - 2;              
                    $keysFound[$newKey . ',' . $key2] = array('Key'=>$grid[$key-1][$key2] . $value2, 'Location'=>$newKey . ',' . $key2);                    
                }                
            } elseif($valueBelow) {
                $isMazeAbove = isset($grid[$key-1][$key2]) ? (($grid[$key-1][$key2]=='.' || $grid[$key-1][$key2]=='#') ? 1:0):0;
                if($isMazeAbove) {
                    $newKey = $key - 1;
                    $keysFound[$newKey.",".$key2] = array('Key'=>$value2.$grid[$key+1][$key2], 'Location'=>$newKey.",".$key2);                     
                } else {
                    $newKey = $key + 2;
                    $keysFound[$newKey . ",".$key2] = array('Key'=>$value2.$grid[$key+1][$key2], 'Location'=>$newKey . ",".$key2);                    
                }                
            } elseif($valueLeft) {                
                $isMazeRight = isset($grid[$key][$key2+1]) ? (($grid[$key][$key2+1]=='.' || $grid[$key][$key2+1]=='#') ? 1:0):0;
                if($isMazeRight) {
                    $newKey = $key2 + 1;
                    $keysFound[$key . "," . $newKey] = array('Key'=>$grid[$key][$key2-1].$value2, 'Location'=>$key . "," . $newKey);                     
                } else {
                    $newKey = $key2 - 2;
                    $newKeyCoord = $key2 - 1;
                    $keysFound[$key . "," . $newKey] = array('Key'=>$grid[$key][$newKeyCoord] . $value2, 'Location'=>$key . "," . $newKey);                    
                } 
            } elseif($valueRight) {                
                $isMazeLeft = isset($grid[$key][$key2-1]) ? (($grid[$key][$key2-1]=='.' || $grid[$key][$key2-1]=='#') ? 1:0):0;
                if($isMazeLeft) {
                    $newKey = $key2 - 1;
                    $keysFound[$key . "," . $newKey] = array('Key'=>$value2 . $grid[$key][$key2+1], 'Location'=> $key . "," . $newKey);                     
                } else {
                    $newKey = $key2 + 2;
                    $newKeyCoord = $key2 + 1;
                    $keysFound[$key . ",".$newKey] = array('Key'=>$value2 . $grid[$key][$newKeyCoord], 'Location'=> $key . ",".$newKey );                    
                } 
            }  
            
        }
    }
}


foreach($keysFound as $key => $value) {
    $keys = explode(',',$value['Location']);
    $grid[$keys[0]][$keys[1]] = 'P';
}

echo count($keysFound);

echo "<br>";

//var_dump($keysFound);
$createdGrid = $grid;
$pathOptions = array();
$roomArray = array();
$branchID = 0;
$branchs = array();
pathFinder($createdGrid,$keysFound, 0, 2, 47);
function pathFinder(&$createdGrid, &$keysFound, $stepCount, $xPosition, $yPosition, $xPositionParent = 0, $yPositionParent = 0, $bID = 0) {
    global $pathOptions,$branchID,$branchs;
    $blocked = 0;    
    $lastX = $xPosition;
    $lastY = $yPosition;
    while($blocked < 1) {
        //$branchs[$bID] = 'Open';
        $pathAbove = (($createdGrid[$xPosition-1][$yPosition] == '.' && !($xPosition-1==$xPositionParent && $yPosition==$yPositionParent) && !($xPosition-1==$lastX && $yPosition==$lastY)) ? 1:0);
        $pathBelow = (($createdGrid[$xPosition+1][$yPosition] == '.' && !($xPosition+1==$xPositionParent && $yPosition==$yPositionParent) && !($xPosition+1==$lastX && $yPosition==$lastY)) ? 1:0);
        $pathLeft = (($createdGrid[$xPosition][$yPosition-1] == '.' && !($xPosition==$xPositionParent && $yPosition-1==$yPositionParent) && !($xPosition==$lastX && $yPosition-1==$lastY)) ? 1:0);
        $pathRight = (($createdGrid[$xPosition][$yPosition+1] == '.' && !($xPosition==$xPositionParent && $yPosition+1==$yPositionParent) && !($xPosition==$lastX && $yPosition+1==$lastY)) ? 1:0);
        
        $totalPathCount = $pathAbove + $pathBelow + $pathLeft + $pathRight;
        
        $xPositionCheck = $xPosition - 1;
        $portalAbove = ((isset($keysFound["$xPositionCheck,$yPosition"]) && !($xPosition-1==$xPositionParent && $yPosition==$yPositionParent) && !($xPosition-1==$lastX && $yPosition==$lastY)) ? 1:0);
        $xPositionCheck = $xPosition + 1;
        $portalBelow = ((isset($keysFound["$xPositionCheck,$yPosition"]) && !($xPosition+1==$xPositionParent && $yPosition==$yPositionParent) && !($xPosition+1==$lastX && $yPosition==$lastY)) ? 1:0);
        $yPositionCheck = $yPosition - 1;
        $portalLeft = ((isset($keysFound["$xPosition,$yPositionCheck"]) && !($xPosition==$xPositionParent && $yPosition-1==$yPositionParent) && !($xPosition==$lastX && $yPosition-1==$lastY)) ? 1:0);
        $yPositionCheck = $yPosition + 1;
        $portalRight = ((isset($keysFound["$xPosition,$yPositionCheck"]) && !($xPosition==$xPositionParent && $yPosition+1==$yPositionParent) && !($xPosition==$lastX && $yPosition+1==$lastY)) ? 1:0);
        $portalCurrent = ((isset($keysFound["$xPosition,$yPosition"])) ? 1:0);
        if($xPosition == 2 && $yPosition == 51) {
            $pathOptions[] = array('EndLocation' => "$xPosition,$yPosition", 'totalSteps' => $stepCount);
            echo "GOT HERE";
            $blocked = 1;
            continue;
        }
        
        if($portalCurrent==1) {
            $keyID = $keysFound[$xPosition.','.$yPosition]['Key'];
            $notID = $xPosition. ",".$yPosition;
            $portalTransferXY = searchForId($keyID,$keysFound,$notID);
            if(!$portalTransferXY && $keyID <> "AA") {
                die("Can't find a matching portal - $keyID :: $xPosition,$yPosition<br>");
            }
            $nextLocationXY = explode(",",$portalTransferXY);
            if(($nextLocationXY[0]==$xPositionParent && $nextLocationXY[1]==$yPositionParent) || $keyID=="AA") {
                // This is where we came from, mark as blocked
                echo "This is where we came from, mark as blocked<br>";
                $portalCurrent = 0;
            }
        }
        
        
        $totalPortalCount = $portalAbove + $portalBelow + $portalLeft + $portalRight + $portalCurrent;
        
        $totalPathOptions = $totalPathCount + $totalPortalCount;
        
        
        
        
        
        
        
        
        
        if($totalPathOptions==0) {
            //echo "No paths left - saving and ending this branch - $bID<br>";
            $blocked = 1;
            continue;
        } elseif($totalPathOptions>1) {
            //echo "doors - $portalCurrent - $totalPathCount - $totalPortalCount :; $xPosition,$yPosition<br>";
            // Multiple doors!
            
            if($portalCurrent==1) {
                // Need to check the portal isn't taking us back somewhere we've been. If it is, just ignore it
                // If it's a new location we need to set the old location to the current location, and set the current location to the new portal destination for the function call below
                pathFinder($createdGrid,$keysFound,$stepCount+1,$nextLocationXY[0],$nextLocationXY[1],$xPosition,$yPosition,++$branchID);
            } 
            if($portalAbove==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition-1,$yPosition,$xPosition,$yPosition,++$branchID);
            }
            if($portalBelow==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition+1,$yPosition,$xPosition,$yPosition,++$branchID);
            }
            if($portalLeft==1) {                
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition,$yPosition-1,$xPosition,$yPosition,++$branchID);
            }
            if($portalRight==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition,$yPosition+1,$xPosition,$yPosition,++$branchID);
            }
            if($pathAbove==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition-1,$yPosition,$xPosition,$yPosition,++$branchID);
            }
            if($pathBelow==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition+1,$yPosition,$xPosition,$yPosition,++$branchID);
            }
            if($pathLeft==1) {                
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition,$yPosition-1,$xPosition,$yPosition,++$branchID);
            }
            if($pathRight==1) {
                pathFinder($createdGrid,$keysFound,$stepCount+1,$xPosition,$yPosition+1,$xPosition,$yPosition,++$branchID);
            }
            //echo "end doors<br>";
            $blocked = 2;
            continue;
        } else {
            //echo "door - $portalCurrent - $totalPathCount - $totalPortalCount  :; $xPosition,$yPosition<br>";
            //var_dump($keysFound);
            $lastX = $xPosition;
            $lastY = $yPosition;
            //echo "door<br>";
            //Single door!
            if($portalCurrent==1) {               
                // This is a new path
               // echo "This is a new path<br>";
                $xPosition = $nextLocationXY[0];
                $yPosition = $nextLocationXY[1];
                $stepCount++;
                
            } elseif($portalAbove==1) {
                $xPosition = $xPosition -1;
                $stepCount++;
            } elseif($portalBelow==1) {
                $xPosition = $xPosition +1;
                $stepCount++;
            } elseif($portalLeft==1) {
                $yPosition = $yPosition -1;
                $stepCount++;
            } elseif($portalRight==1) {
                $yPosition = $yPosition +1;
                $stepCount++;
            } elseif($pathAbove==1) {
                $xPosition = $xPosition -1;
                $stepCount++;
            } elseif($pathBelow==1) {
                $xPosition = $xPosition +1;
                $stepCount++;
            } elseif($pathLeft==1) {
                $yPosition = $yPosition -1;
                $stepCount++;
            } elseif($pathRight==1) {
                $yPosition = $yPosition +1;
                $stepCount++;
            }  
            //echo "end door - $blocked<br>";
        }
       // echo "end door 2<Br>";
    }
    if($blocked==1){     
        echo "Blocked, saving end state of this branch - $bID<br>";
        //$branchs[$bID] = 'Closed';
        //echo count($branchs);
        //var_dump($branchs);
       // $pathOptions[] = array('EndLocation' => "$xPosition,$yPosition", 'totalSteps' => $stepCount);
    }
    return;
    
}
echo "<br>FINISHED<br>";
array_multisort(array_column($pathOptions, 'totalSteps'), SORT_DESC,
                $pathOptions);

echo "<br>FINISHED<br>";
var_dump($pathOptions);







function searchForId($id, $array, $notID) {
   foreach ($array as $key => $val) {
       if ($val['Key'] === $id && $val['Location'] <> $notID) {
           return $val['Location'];
       }
   }
   return null;
}



































printGrid($grid);


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










