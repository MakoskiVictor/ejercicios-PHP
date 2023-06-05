<?php
  // CONSULA A BASE DE DATOS

  $server="localhost"; // 127.0.0.1 -> localhost
  $user="root";
  $password="";
  $dbname="album";

  try {
    $conection = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conection -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexion exitosa"."<br/>";

    // Para hacer una consulta
    $sql= "SELECT * FROM `fotod`";

    $sentencia = $conection -> prepare($sql);
    $sentencia -> execute();

    $resultado = $sentencia -> fetchAll();

    foreach($resultado as $foto) {
      echo $foto["nombre"]."<br>";
    }

  } catch(PDOException $error) {
    echo "Error:".$error -> getMessage();
  }



?>