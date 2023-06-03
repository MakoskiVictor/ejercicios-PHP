<?php
  //CONEXIÓN A UNA BASE DE DATOS

  // Datos de conexión

  $server="localhost"; // 127.0.0.1 -> localhost
  $user="root";
  $password="";
  $dbname="album";

  try{

    $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ECHO "Conexión exitosa";

  } catch(PDOException $error) {
    echo "Error ocurrido: " . $error->getMessage();
  }

  //setAttribute -> son propiedades que podemos controlar
  //ATTR_ERRMODE -> nos permite controlar el modo de error
  //ERRMODE -> nos permite controlar el modo de error
  //ERRMODE_DEFAULT -> nos permite ver los errores que ocurren
  //ERRMODE_EXCEPTION -> nos permite ver los errores que ocurren
  //ERRMODE_SILENT -> no muestra nada
  //ERRMODE_WARNING -> nos muestra un warning


?>