<?php 
// PHP program to find LCM of n elements 
  
// Utility function to find 
// GCD of 'a' and 'b' 
function gcd($a, $b) 
{ 
    if ($b == 0) 
        return $a; 
    return gcd($b, $a % $b); 
} 
  
// Returns LCM of array elements 
function findlcm($arr, $n) 
{ 
      
    // Initialize result 
    $ans = $arr[0]; 
  
    // ans contains LCM of  
    // arr[0], ..arr[i] 
    // after i'th iteration, 
    for ($i = 1; $i < $n; $i++) 
        $ans = ((($arr[$i] * $ans)) / 
                (gcd($arr[$i], $ans))); 
  
    return $ans; 
} 
  
// Driver Code 
$arr = array(28172, 96526, 115807 ); 
$n = sizeof($arr); 
echo findlcm($arr, $n) *2; 
  
    
    // 28172 
    // 96526  
    // 115807  
?> 

