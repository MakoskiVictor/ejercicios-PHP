<?php
  //INSERCIÓN DIRECTA DE DATOS A UNA BASE DE DATOS

  // Datos de conexión

  $server="localhost"; // 127.0.0.1 -> localhost
  $user="root";
  $password="";
  $dbname="album";

  try{

    $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Instrucción de inserción de dato
    $sql="INSERT INTO `fotod` (`id`, `nombre`, `ruta`) VALUES ('', 'Jugando con la programación en PHP', 'foto2.jpg');";

    // Método para ejecutar instrucción
    $conexion->exec($sql);
    
    ECHO "Conexión exitosa";

  } catch(PDOException $error) {
    echo "Error ocurrido: " . $error->getMessage();
  }


?>