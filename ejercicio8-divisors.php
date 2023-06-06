<?php
  /* Create a function named divisors/Divisors that takes an integer n > 1 
  and returns an array with all of the integer's divisors(except for 1 and 
  the number itself), from smallest to largest. If the number is prime return the string '(integer) is prime' 
  (null in C#) (use Either String a in Haskell and Result<Vec<u32>, String> in Rust).

  Example:
  divisors(12); // => [2, 3, 4, 6]
  divisors(25); // => [5]
  divisors(13); // => '13 is prime' */

  function divisors($integer) {
    // Your code here
    $divisors = [];
    
    for ($i = 2; $i < $integer; $i++) {
      if ($integer % $i === 0) {
        array_push($divisors, $i);
        }
    }
    // count es el length
    if (count($divisors) === 0) {
      return $integer." is prime";
    } else {
      return $divisors;
    }
  }


?>