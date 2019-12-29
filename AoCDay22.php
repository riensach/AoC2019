<?php
set_time_limit(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("deal with increment 15
cut 2234
deal with increment 30
cut -1865
deal with increment 26
cut -5396
deal with increment 69
deal into new stack
deal with increment 64
cut -5111
deal with increment 23
deal into new stack
deal with increment 53
deal into new stack
deal with increment 54
cut -5384
deal with increment 18
cut -1325
deal into new stack
deal with increment 49
cut 1174
deal with increment 71
deal into new stack
cut -5632
deal with increment 12
cut -6300
deal with increment 73
cut -1310
deal into new stack
cut 6522
deal with increment 36
deal into new stack
cut 2878
deal with increment 50
cut 7596
deal with increment 40
cut 3179
deal with increment 27
cut 538
deal with increment 46
cut 7520
deal with increment 71
cut -3471
deal with increment 5
cut -274
deal into new stack
cut -846
deal into new stack
deal with increment 60
cut -5584
deal with increment 13
deal into new stack
deal with increment 47
deal into new stack
cut -5887
deal with increment 4
cut -7255
deal with increment 54
cut 8329
deal with increment 18
cut -1293
deal into new stack
cut -2840
deal into new stack
cut -2203
deal with increment 74
cut 4303
deal with increment 42
cut -7783
deal with increment 43
cut -4040
deal with increment 21
cut -8001
deal with increment 70
cut 7243
deal with increment 41
cut 9882
deal with increment 50
cut -1588
deal with increment 35
cut 4225
deal with increment 5
cut 9281
deal with increment 57
deal into new stack
deal with increment 10
deal into new stack
cut -29
deal with increment 71
cut -3739
deal with increment 20
cut 2236
deal with increment 9
deal into new stack
cut -1199
deal with increment 33
deal into new stack
deal with increment 30
cut -2735
deal with increment 54");

$maxLength = 10007;


/*$input = ("deal with increment 7
deal into new stack
deal into new stack");

$maxLength = 10;
 * 
 */









$arrayInfo = explode("\n",$input);

$cards = new \Ds\Deque([]);
for($i = 0;$i < $maxLength; $i++) {
    $cards->push($i);
}
$time_pre = microtime(true);
$cutPosition = $dealIncrement = 0;
foreach($arrayInfo as $key => $value) {
    
    $operationFirst = substr($value,0,3);
    $operationSecond = substr($value,0,9);
    if($operationFirst=='cut') {
        $operation = 'cut';
        $cutPosition = (int) str_replace(' ', '', substr($value,3));
    } elseif($operationSecond=='deal with') {
        $operation = 'dealIncrement';   
        $dealIncrement = (int) str_replace(' ', '', substr($value,-3));
    } elseif($operationSecond=='deal into') {
        $operation = 'newStack';        
    }
    
    if($operation=='newStack') {
       // echo "New Stack<br>";
        //continue;
        $newCards = $cards->reversed();
        unset($cards);
        $cards = $newCards->copy();
        
    } elseif($operation=='cut') {
        //echo "Cut at position $cutPosition<br>";
        //continue;
        $cards->rotate($cutPosition);
        
    } elseif($operation=='dealIncrement') {
        //echo "Deal with increment $dealIncrement<br>";
        //continue;
        $newCards = $cards->copy();
        //var_dump($cards->toArray()); 
        //var_dump($newCards->toArray()); 
        for($i = 1;$i < $maxLength; $i++) {
            $cards->rotate(1);
            $newCards->rotate($dealIncrement);
            $newCards->set(0,$cards->first());
           // echo "Rotate $dealIncrement setting the value to be ".$cards->first()."<br>";
        }
        
       // var_dump($cards->toArray()); 
       // var_dump($newCards->toArray()); 
        $newCards->rotate($dealIncrement);
        unset($cards);
        $cards = $newCards->copy();
        
    }
    

    $time_post = microtime(true);
    $exec_time = $time_post - $time_pre;   
    if($exec_time % 500 == 0) {
        //echo " - execution time: $exec_time<br>";
    }
    
}
echo "Finished - execution time: $exec_time<br>";
echo "Card 2019 found as position ".$cards->find(2019);
echo "<br>";
    
var_dump($cards->toArray());   