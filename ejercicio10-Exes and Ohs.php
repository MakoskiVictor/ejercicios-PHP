<?php
/* Check to see if a string has the same amount of 'x's and 'o's. 
The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false */

function XO($s) {
  // Convertimos todo a minúsculas
  $string = strtolower($s);
  // Contamos la cantidad de "x"
  $countX = substr_count($string, "x");
  // Contamos la cantidad de "o"
  $countO = substr_count($string, "o");
  
  // Devolvemos true o false con un ternario
  return $countX === $countO ? true : false;
}


?>