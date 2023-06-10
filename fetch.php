<?php 

// GUARDO URL EN UNA VARIABLE
$url = "https://restcountries.com/v3.1/all";

// CONFIGURO LAS OPCIONES DE LECTURA
$options = array("ssl" => array("verify_peer" => false, "verify_prr_name" => false));

// FILE_GET_CONTENTE ME PERMITE LEER EL CONTENIDO DE ACUERDO A MIS OPCIONES CONFIGURADAS
$response = file_get_contents($url, false, stream_context_create($options));

$objResponse = json_decode($response);

/* print_r ($objResponse); */

  $filteredCountries = array_map(function($c) {
    return (object) [
      "name" => property_exists($c, 'name') ? $c -> name -> common : $c -> name -> official,
      "capital" => property_exists($c, 'capital') ? $c -> capital[0] : "No info",
      "region" => property_exists($c, 'region') ? $c -> region : "No info",
      "subregion" => property_exists($c, 'subregion') ? $c -> subregion : "No info",
      "languages" => property_exists($c, 'languages') ? reset($c -> languages) : "No info",
      "maps" => property_exists($c, 'maps') ? $c -> maps -> googleMaps : "No info",
      "population" => property_exists($c, 'population') ? $c -> population : 0,
      "flag" => property_exists($c, 'flags') ? $c -> flags -> svg : $c -> flags -> png,
      "area" => property_exists($c, 'area') ? $c -> area : 0
    ];

 
  }, $objResponse);

  print_r ($filteredCountries);