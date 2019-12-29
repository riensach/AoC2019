<?php
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("<x=17, y=-12, z=13>
<x=2, y=1, z=1>
<x=-1, y=-17, z=7>
<x=12, y=-14, z=18>");

$input = ("<x=-8, y=-10, z=0>
<x=5, y=5, z=10>
<x=2, y=-7, z=3>
<x=9, y=-8, z=-3>");


// 2772
$inputArray = explode("\n", $input);

$moons = array();

foreach($inputArray as $key => $value) {
    if($key==0) {
        $name = 'Io';        
    } elseif($key==1) {
        $name = 'Europa';        
    } elseif($key==2) {
        $name = 'Ganymede';        
    } elseif($key==3) {
        $name = 'Callisto';
    }
    $value = str_replace('<','',$value);
    $value = str_replace('>','',$value);
    $value = str_replace(' ','',$value);
    $coords = explode(',',$value);
    $x = str_replace('x=','',$coords[0]);
    $y = str_replace('y=','',$coords[1]);
    $z = str_replace('z=','',$coords[2]);
    
    $moons[] = array('name' => $name, 'x' => (int) $x, 'y' => (int) $y, 'z' => (int) $z, 'velocityX' => 0, 'velocityY' => 0, 'velocityZ' => 0);
}

var_dump($moons);

$arrayOptions = $moons;
$steps = 0;
$time_pre = microtime(true);
    $consideredPatterns = array();
while($steps < 1000000000000000) {
    
    // Apply gravity to update velocity   
    $moonCount1 = 0;    
    $moonCount2 = 0;
    while($moonCount1 < 4) {
        while($moonCount2 < 4) {            
            if($moonCount2 <> $moonCount1 && !isset($consideredPatterns[$moonCount2.",".$moonCount1]) && !isset($consideredPatterns[$moonCount1.",".$moonCount2])) {
                if($moons[$moonCount1]['x'] - $moons[$moonCount2]['x'] > 0) {
                    $moons[$moonCount1]['velocityX'] = $moons[$moonCount1]['velocityX'] - 1;
                    $moons[$moonCount2]['velocityX'] = $moons[$moonCount2]['velocityX'] + 1;                    
                } elseif($moons[$moonCount1]['x'] - $moons[$moonCount2]['x'] < 0) {
                    $moons[$moonCount1]['velocityX'] = $moons[$moonCount1]['velocityX'] + 1;
                    $moons[$moonCount2]['velocityX'] = $moons[$moonCount2]['velocityX'] - 1;                      
                }
                
                if($moons[$moonCount1]['y'] - $moons[$moonCount2]['y'] > 0) {
                    $moons[$moonCount1]['velocityY'] = $moons[$moonCount1]['velocityY'] - 1;
                    $moons[$moonCount2]['velocityY'] = $moons[$moonCount2]['velocityY'] + 1;                    
                } elseif($moons[$moonCount1]['y'] - $moons[$moonCount2]['y'] < 0) {
                    $moons[$moonCount1]['velocityY'] = $moons[$moonCount1]['velocityY'] + 1;
                    $moons[$moonCount2]['velocityY'] = $moons[$moonCount2]['velocityY'] - 1;                      
                }
                
                if($moons[$moonCount1]['z'] - $moons[$moonCount2]['z'] > 0) {
                    $moons[$moonCount1]['velocityZ'] = $moons[$moonCount1]['velocityZ'] - 1;
                    $moons[$moonCount2]['velocityZ'] = $moons[$moonCount2]['velocityZ'] + 1;                    
                } elseif($moons[$moonCount1]['z'] - $moons[$moonCount2]['z'] < 0) {
                    $moons[$moonCount1]['velocityZ'] = $moons[$moonCount1]['velocityZ'] + 1;
                    $moons[$moonCount2]['velocityZ'] = $moons[$moonCount2]['velocityZ'] - 1;                     
                }
                
                $consideredPatterns[$moonCount2.",".$moonCount1] = 'done';              

            }            
            $moonCount2++;
        }
        $moonCount2 = 0;
        $moonCount1++;
    }
    $consideredPatterns = array();
    // Apply velocity
    foreach($moons as $key => $value) {
        $moons[$key]['x'] += $moons[$key]['velocityX'];
        $moons[$key]['y'] += $moons[$key]['velocityY'];
        $moons[$key]['z'] += $moons[$key]['velocityZ'];
    }  
   
    $steps++;
    
    $optionID = $moons[0]['velocityX'];
    //var_dump($moons);
    // 0 = 17961 
    // 1 = 195765 
    // 2 = 381 
    // 3 = 12
    // 428238 too low
    
    // 0 = 9487  
    // 1 = 1404  
    // 2 = 418  
    // 3 = 37435 
    // Target: 468,677,492,4
    //104,212,576,173,420

    
    
    
    
    if($moons[0]['velocityX']==0 && $moons[0]['velocityY']==0 && $moons[0]['velocityZ']==0 && $steps > 1) { 
        echo "Exists again after $steps steps for moon 0 :: value found: $optionID <br>";
        //break;
    } 
    if($moons[1]['velocityX']==0 && $moons[1]['velocityY']==0 && $moons[1]['velocityZ']==0 && $steps > 1) { 
        echo "Exists again after $steps steps for moon 1 :: value found: $optionID <br>";
        //break;
    } 
    if($moons[2]['velocityX']==0 && $moons[2]['velocityY']==0 && $moons[2]['velocityZ']==0 && $steps > 1) { 
        echo "Exists again after $steps steps for moon 2 :: value found: $optionID <br>";
        //break;
    } 
    if($moons[3]['velocityX']==0 && $moons[3]['velocityY']==0 && $moons[3]['velocityZ']==0 && $steps > 1) { 
        echo "Exists again after $steps steps for moon 3 :: value found: $optionID <br>";
        //break;
    } 
    
    $time_post = microtime(true);
    $exec_time = $time_post - $time_pre;
    if($exec_time % 50 == 0 && $exec_time > 1) {
        echo "Spent $exec_time seconds so far and done $steps steps<br>";
        break;
    }
    
    
}

// Calculate energy
$totalEnergy = 0;
foreach($moons as $key => $value) {
    $potentialEnergy = abs($moons[$key]['x']) + abs($moons[$key]['y']) + abs($moons[$key]['z']);
    $kineticEnergy = abs($moons[$key]['velocityX']) + abs($moons[$key]['velocityY']) + abs($moons[$key]['velocityZ']);
    $totalEnergy = $totalEnergy + ($potentialEnergy * $kineticEnergy);
}  

var_dump($moons);

echo "The total energy in the system after 1000 steps is $totalEnergy";