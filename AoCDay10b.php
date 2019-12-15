<?php



$inputData = (".#......#...#.....#..#......#..##..#
..#.......#..........#..##.##.......
##......#.#..#..#..##...#.##.###....
..#........#...........#.......##...
.##.....#.......#........#..#.#.....
.#...#...#.....#.##.......#...#....#
#...#..##....#....#......#..........
....#......#.#.....#..#...#......#..
......###.......#..........#.##.#...
#......#..#.....#..#......#..#..####
.##...##......##..#####.......##....
.....#...#.........#........#....#..
....##.....#...#........#.##..#....#
....#........#.###.#........#...#..#
....#..#.#.##....#.........#.....#.#
##....###....##..#..#........#......
.....#.#.........#.......#....#....#
.###.....#....#.#......#...##.##....
...##...##....##.........#...#......
.....#....##....#..#.#.#...##.#...#.
#...#.#.#.#..##.#...#..#..#..#......
......#...#...#.#.....#.#.....#.####
..........#..................#.#.##.
....#....#....#...#..#....#.....#...
.#####..####........#...............
#....#.#..#..#....##......#...#.....
...####....#..#......#.#...##.....#.
..##....#.###.##.#.##.#.....#......#
....#.####...#......###.....##......
.#.....#....#......#..#..#.#..#.....
..#.......#...#........#.##...#.....
#.....####.#..........#.#.......#...
..##..#..#.....#.#.........#..#.#.##
.........#..........##.#.##.......##
#..#.....#....#....#.#.......####..#
..............#.#...........##.#.#..");



$inputRows = explode("\n",$inputData);

$informationArray = array();

foreach($inputRows as $key => $value) {
    $informationArray[] = array();
    $arrayKey = array_key_last($informationArray);
    $inputRowData = str_split($value);
    foreach($inputRowData as $key2 => $value2) {
        $informationArray[$arrayKey][] = $value2;
    }
}

$arrayRows = array_key_last($informationArray);
$arrayColumns = array_key_last($informationArray[$arrayRows]);

$asteroids = array();

$x = $y = 0;
while($x<=$arrayRows) {
    while($y<=$arrayColumns) {
        if($informationArray[$x][$y]=="#") {
            $asteroids[] = "$x,$y";
        }
        if($informationArray[$x][$y]=="X" || ($x == 19 && $y == 23)) {
            $stationVector = array($x,$y);            
            $stationVectorX = $x;
            $stationVectorY = $y;
        }
        $y++;
    }
    $y = 0;
    $x++;
}

//19,23 = station


$vectors = array();
$possibleVectors = array();
$asteroidCount = 0;
foreach($asteroids as $key => $value) {
    
    $startingPosition = explode(",",$value); 
    
    $targetVector = array($startingPosition[0],$startingPosition[1]);  
    $dxc =  $startingPosition[0] - $stationVectorX;
    $dyc =  $startingPosition[1] - $stationVectorY;
    $vector = rad2deg(atan2($startingPosition[1]-$stationVectorY,$startingPosition[0]-$stationVectorX));

    //$vector = acos(dot($stationVector, $targetVector) / (norm($stationVector) * norm($targetVector)));
    
    //$vector = ($dxc + $dyc)^2;
    
    //$vector = atan2($dxc,$dyc)* 180 / M_PI;
    
    
    
    
    
    //angle = math.atan2(math.abs(x-a),math.abs(y-b))
    
    //echo "$vector - $stationVectorX,$stationVectorY :: ".$startingPosition[0].",".$startingPosition[1]."<br>";
    //$vector = $vector * 180 / pi();
    if(!isset($vectors[$vector])){
        $vectors[$vector] = array();
    }
    $vectors[$vector][] = $value;
    if(!in_array($vector, $possibleVectors)) {
        $possibleVectors[] = $vector;        
    }
    $asteroidCount++;
}

krsort($vectors);
//var_dump($vectors);

arsort($possibleVectors);
//var_dump($possibleVectors);

 

  
$asteroidLeft = $asteroidCount;
$destroidAsteroids =array();
foreach($possibleVectors as $key => $vector) {
    if(isset($vectors[$vector])) {
        $closestKey = -1;
        $closestX = 0;
        $closestY = 0;
        $distance = 99999999999999999999999999999;
        foreach($vectors[$vector] as $key2 => $possibleTarget) {
            $targetDimensions = explode(",",$possibleTarget); 
            $dxc =  $targetDimensions[0] - $stationVectorX;
            $dyc =  $targetDimensions[1] - $stationVectorY;
            if($closestKey > -1) {
                $dist = abs($targetDimensions[0] - $stationVectorX) + abs($targetDimensions[1] - $stationVectorY);
                if($dist < $distance) {                
                    $closestX = $targetDimensions[0];
                    $closestY = $targetDimensions[1];
                    $closestKey = $key2;                    
                }
            } else {                
                $closestX = $targetDimensions[0];
                $closestY = $targetDimensions[1];
                $closestKey = $key2;
            }
        }
        $closestVector = $vectors[$vector][$closestKey];
        echo "For vector $vector the closest vector left is $closestVector<br>";
        $destroidAsteroids[] = $closestVector;
        unset($vectors[$vector][$closestKey]);
    }
    
    if(count($vectors[$vector]) < 1) {
        unset($vectors[$vector]);
    }
    
}



var_dump($destroidAsteroids);



echo $destroidAsteroids[199];



$startingPosition = explode(",",$destroidAsteroids[199]); 

$output = ($startingPosition[1] * 100) + $startingPosition[0];

echo "<br>$output";

//1714 = too high

//1417 = correct