<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = ("11 RVCS => 8 CBMDT
29 QXPB, 8 QRGRH => 8 LGMKD
3 VPRVD => 6 PMFZG
1 CNWNQ, 11 MJVXS => 6 SPLM
13 SPDRZ, 13 PMFZG => 2 BLFM
8 QWPFN => 7 LWVB
1 SPLM => 8 TKWQ
2 QRGRH, 6 CNWNQ => 7 DTZW
2 DMLT, 1 SPLM, 1 TMDK => 9 NKNS
1 MJVXS, 1 HLBV => 7 PQCQH
1 JZHZP, 9 LWVB => 7 MJSCQ
29 DGFR => 7 QRGRH
14 XFLKQ, 2 NKNS, 4 KMNJF, 3 MLZGQ, 7 TKWQ, 24 WTDW, 11 CBMDT => 4 GJKX
4 TKWQ, 1 WLCFR => 4 PDKGT
2 NKNS => 4 GDKL
4 WRZST => 9 XFLKQ
19 DGFR => 4 VPRVD
10 MJSCQ, 4 QWPFN, 4 QXPB => 2 MLZGQ
1 JZHZP => 7 QWPFN
1 XFLKQ => 9 FQGVL
3 GQGXC => 9 VHGP
3 NQZTV, 1 JZHZP => 2 NVZWL
38 WLCFR, 15 GJKX, 44 LGMKD, 2 CBVXG, 2 GDKL, 77 FQGVL, 10 MKRCZ, 29 WJQD, 33 BWXGC, 19 PQCQH, 24 BKXD => 1 FUEL
102 ORE => 5 DGFR
17 NWKLB, 1 SBPLK => 5 HRQM
3 BWXGC => 8 TQDP
1 TQDP => 2 PSZDZ
2 MJVXS => 9 WNXG
2 NBTW, 1 HRQM => 2 SVHBH
8 CNWNQ, 1 DTZW => 4 RVCS
4 VHGP, 20 WNXG, 2 SVHBH => 3 SPDRZ
110 ORE => 5 TXMC
10 QRGRH => 5 NWKLB
1 SBPLK => 3 MJVXS
9 DGFR => 5 RFSRL
5 LBTV => 3 DMLT
1 NWKLB, 1 KMNJF, 1 HDQXB, 6 LBTV, 2 PSZDZ, 34 PMFZG, 2 SVHBH => 2 WJQD
1 RVCS => 5 MKRCZ
14 NQZTV, 3 FPLT, 1 SJMS => 2 GQGXC
18 RFSRL, 13 VHGP, 23 NBTW => 5 WTDW
1 VHGP, 6 TKWQ => 7 QXPB
1 JZHZP, 1 CNWNQ => 5 KMNJF
109 ORE => 9 BWXGC
2 CNWNQ, 1 PDKGT, 2 KMNJF => 5 HDQXB
1 PDKGT, 18 WRZST, 9 MJSCQ, 3 VHGP, 1 BLFM, 1 LGMKD, 7 WLCFR => 2 BKXD
11 MLJK => 6 FPLT
8 DGFR, 2 TXMC, 3 WJRC => 9 SJMS
2 SBPLK => 1 LBTV
22 QWPFN => 4 WRZST
5 WRZST, 22 WNXG, 1 VHGP => 7 NBTW
7 RVCS => 9 TMDK
1 DGFR, 14 TXMC => 5 JZHZP
2 JZHZP => 3 SBPLK
19 PDKGT => 8 HLBV
195 ORE => 6 WJRC
6 GQGXC => 8 CNWNQ
1 NVZWL, 4 GQGXC => 2 CBVXG
1 NVZWL, 1 KMNJF => 8 WLCFR
153 ORE => 4 MLJK
1 BWXGC => 6 NQZTV");

//175452 too low

$inputArray = explode("\n", $input);
$minerals = array();
$mineralReactions = array();
foreach($inputArray as $key => $value) {
    $values = explode(" => ", $value);
    
    $inputs = explode(", ", $values[0]);
    $outputs = explode(", ", $values[1]);
    
    $reaction = array();
    $reaction['inputs'] = array();
    $reaction['outputs'] = array();
    foreach($inputs as $key2 => $value2) {
        $inputValues = explode(" ", $value2);
        $reaction['inputs'][] = array('inputMineral' => $inputValues[1], 'inputQuantity' => $inputValues[0]);
        if(!isset($minerals[$inputValues[1]])) {
            $minerals[$inputValues[1]] = 0;
        }
    }
    
    foreach($outputs as $key3 => $value3) {
        $outputValues = explode(" ", $value3);
        $reaction['outputs'][] = array('outputMineral' => $outputValues[1], 'outputQuantity' => $outputValues[0]);
        if(!isset($minerals[$outputValues[1]])) {
            $minerals[$outputValues[1]] = 0;
        }
    }
    
    $mineralReactions[] = $reaction;   
    
}

global $oreRequired, $mineralsUsed;
$mineralsUsed = $minerals;
$targetFuel = 10;
// 178154  = 1
// 8046537  = 50
// 80313893 = 500
// 160618806 = 1000
// 642456297 
// 803071067 = 5000

// 6226099 is wrong
// 6226107 ???
// 6227148 is wrong
// 6227149 is wrong
// 6226084 is wrong
// 6226152
// 6226184.287 is wrong ???
// 6226262 is wrong
// Target ORE :: 1,000,000,000,000
$time_pre = microtime(true);
$empty = 1;
//$mineralsUsed = $minerals;
while($minerals['FUEL'] < $targetFuel) {
    $minerals = getRequiredMinerals($minerals,'FUEL',1);
}
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Total ORE required: $oreRequired found in $exec_time seconds";
// Target = 82892753  for example
var_dump($minerals);


//5613123 == too low

function getRequiredMinerals($minerals,$desiredMineral,$desiredMineralQuantity) {
    global $oreRequired, $mineralReactions, $mineralsUsed;
    if($desiredMineral=='ORE') {
        $minerals['ORE'] += $desiredMineralQuantity;
        $oreRequired += $desiredMineralQuantity;
        return $minerals;
    }

        foreach($mineralReactions as $key => $value) {
            if($value['outputs'][0]['outputMineral'] == $desiredMineral) {
                foreach($value['inputs'] as $key2 => $value2) {
                   // if($value2['inputQuantity'] > $minerals[$value2['inputMineral']]) {
                    //    $quantityNeeded = $value2['inputQuantity'] - $minerals[$value2['inputMineral']];
                    //    $minerals = getRequiredMinerals($minerals,$value2['inputMineral'],$quantityNeeded);
                        
                   // }
                    while($value2['inputQuantity'] > $minerals[$value2['inputMineral']]) {
                        $quantityNeeded = $value2['inputQuantity'] - $minerals[$value2['inputMineral']]; 
                        $minerals = getRequiredMinerals($minerals,$value2['inputMineral'],$quantityNeeded);  
                        //echo "Get me $quantityNeeded more ".$value2['inputMineral']." for reacion $key<br>";
                    }
                    //$minerals[$value2['inputMineral']] -= $value2['inputQuantity'];
                }
                foreach($value['inputs'] as $key2 => $value2) {
                   // if($value2['inputQuantity'] > $minerals[$value2['inputMineral']]) {
                   //     $quantityNeeded = $value2['inputQuantity'] - $minerals[$value2['inputMineral']];
                    //    $minerals = getRequiredMinerals($minerals,$value2['inputMineral'],$quantityNeeded);
                        
                   // }
                    while($value2['inputQuantity'] > $minerals[$value2['inputMineral']]) {
                        $quantityNeeded = $value2['inputQuantity'] - $minerals[$value2['inputMineral']];
                        $minerals = getRequiredMinerals($minerals,$value2['inputMineral'],$quantityNeeded);   
                        //echo "Get me $quantityNeeded more ".$value2['inputMineral']." for reacion $key<br>";
                    }
                    $minerals[$value2['inputMineral']] -= $value2['inputQuantity'];
                }
                //$minerals = processMineralReaction($minerals,$mineralReactions[$key]);
                $minerals[$value['outputs'][0]['outputMineral']] += $value['outputs'][0]['outputQuantity'];
                $mineralsUsed[$value['outputs'][0]['outputMineral']] += $value['outputs'][0]['outputQuantity'];
                return $minerals; 
            }
        } 

       
}


function processMineralReaction($mineralsPresent,$reaction) {  
    global $mineralsUsed;
    foreach($reaction['inputs'] as $key2 => $inputs) {
        if($mineralsPresent[$inputs['inputMineral']] >= $inputs['inputQuantity']) {
            $mineralsPresent[$inputs['inputMineral']] -= $inputs['inputQuantity'];
        }
    }
    foreach($reaction['outputs'] as $key => $outputs) {        
          $mineralsPresent[$outputs['outputMineral']] += $outputs['outputQuantity'];   
          $mineralsUsed[$outputs['outputMineral']] += $outputs['outputQuantity'];
    }  
    return $mineralsPresent; 
}