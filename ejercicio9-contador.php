<?php
/* Count the number of Duplicates
Write a function that will return the count of distinct case-insensitive alphabetic characters 
and numeric digits that occur more than once in the input string. The input string can be 
assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

Example
"abcde" -> 0 # no characters repeats more than once
"aabbcde" -> 2 # 'a' and 'b'
"aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
"indivisibility" -> 1 # 'i' occurs six times
"Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
"aA11" -> 2 # 'a' and '1'
"ABBA" -> 2 # 'A' and 'B' each occur twice */

/* function duplicateCount($text) {
  // Convierto el array a minúsculas
  $string = strtolower($text);
  
  // Seteo un contador
  $count = [];
  
  // Recorro cada caracter del string en minúsculas
  for ($i = 0; $i < strlen($string) - 1; $i++ ) {
    $index = $string[$i];
    // Importante $j = $i+1
    for ($j = $i + 1; $j < strlen($string); $j++) {
      // Si el caracter en $i es igual al de $j y este no se encuentra en el contador
      if (($index === $string[$j]) && (!in_array($string[$j], $count))) {
        // Lo pusheo al contador
        array_push($count, $string[$j]);
      }
    }
  }
  return count($count);
} */

// REFACTOR

function duplicateCount($text) {
  // Convierto el array a minúsculas
  $string = strtolower($text);
  
  // Seteo un contador
  $count = [];
  
  foreach (count_chars($string, 1) as $char => $repeat) {
    if ($repeat > 1) {
      array_push($count, $char);
    }
  }
  return count($count);
}

?>