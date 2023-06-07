<?php
/* Given an array of integers, find the one that appears an odd number of times.

There will always be only one integer that appears an odd number of times.

Examples
[7] should return 7, because it occurs 1 time (which is odd).
[0] should return 0, because it occurs 1 time (which is odd).
[1,1,2] should return 2, because it occurs 1 time (which is odd).
[0,1,0,1,0] should return 0, because it occurs 3 times (which is odd).
[1,2,2,3,3,3,4,3,3,3,2,2,1] should return 4, because it appears 1 time (which is odd). */


function findIt(array $seq) : int {
  // Enter your code here

$oddRepeatedNumber = null;
$countedNumbers = [];

for ($i = 0; $i < count($seq); $i++) {
  $index = $seq[$i];
  $count = 1;
  
  for ($j = $i + 1; $j < count($seq); $j++) {
    
    // Si no está en countedNumbers y el $seq[$i] es igual al $seq[$j]
    if ((in_array($index, $countedNumbers) === false) && ($seq[$j] === $index)) {
      $count++;
    } 
  }
    // Si termina lo anterior y el num no está en countedNumbers
    if (in_array($index, $countedNumbers) === false) {
      array_push($countedNumbers, $index);
      // Si no estaba contado y es impar
      if ($count % 2 !== 0) {
              $oddRepeatedNumber = $index;
            }      
    }
}

return $oddRepeatedNumber;

}


?>