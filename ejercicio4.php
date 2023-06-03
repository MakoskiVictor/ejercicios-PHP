<?php
  // MÉTODOS ESTÁTICOS 

  class unMetodo {
    // Creación de un método estático con la palabra reservada -> static
    public static function unMetodoEstatico(){
      echo "Este es un método estático"."<br/>";
    }
  }

  // Llamada de método tradicional mediante instanciación
  $obj = new unMetodo();
  $obj->unMetodoEstatico();

  // Llamada de método estático
  unMetodo::unMetodoEstatico();

?>