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

$inputData = (".#....#####...#..
##...##.#####..##
##...#...#.#####.
..#.....X...###..
..#.#.....#....##");

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
        $y++;
    }
    $y = 0;
    $x++;
}

//19,23 = station
$foundAsteroidArray = array();
foreach($asteroids as $key => $value) {
    $startingAsteroid = $value;
    $startingPosition = explode(",",$startingAsteroid);
    $foundAsteroids = 0;
    foreach($asteroids as $key3 => $value3) {
        if($value3!=$startingAsteroid) {            
            $comparisonPosition = explode(",",$value3);
            
            foreach($asteroids as $key2 => $value2) {
                if($value2!=$startingAsteroid && $value2!=$value3) {    
                    $potentialConflict = explode(",",$value2);
                    $dxc = $potentialConflict[0] - $startingPosition[0];
                    $dyc = $potentialConflict[1] - $startingPosition[1];

                    $dxl = $comparisonPosition[0] - $startingPosition[0];
                    $dyl = $comparisonPosition[1] - $startingPosition[1];

                    $cross = ($dxc * $dyl - $dyc * $dxl);
                    
                    if($cross==0) {
                        // conflict

                        if (abs($dxl) >= abs($dyl)) {
                            $output = $dxl > 0 ? 
                              $startingPosition[0] <= $potentialConflict[0] && $potentialConflict[0] <= $comparisonPosition[0]:
                              $comparisonPosition[0] <= $potentialConflict[0] && $potentialConflict[0] <= $startingPosition[0];
                        } else {
                            $output = $dyl > 0 ? 
                              $startingPosition[1] <= $potentialConflict[1] && $potentialConflict[1] <= $comparisonPosition[1]:
                              $comparisonPosition[1] <= $potentialConflict[1] && $potentialConflict[1] <= $startingPosition[1];
                        }
                        //echo "<br>conflict - $output - $startingAsteroid :: $value2 :: $value3 :: $cross";
                        if($output==1) {
                           // echo "<br>conflict - $output - $startingAsteroid :: $value2 :: $value3 :: $cross";
                            continue 2;
                            
                        }
                    }
                }
            }
            $foundAsteroids++;
        }
    }
    $foundAsteroidArray[$startingAsteroid] = $foundAsteroids;
}

arsort($foundAsteroidArray);
var_dump($foundAsteroidArray);