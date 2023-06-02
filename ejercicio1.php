<?php
// Creacion de clases
  class persona {
    // Propiedades
    public $nombre; // public -> Puedo acceder desde cualquier lugar
    private $edad; // private -> Solo puedo acceder desde la clase
    protected $altura;    // protected -> Solo puedo acceder desde la clase y desde las clases hijas
    // Métodos

    public function asignarNombre ($nuevoNombre) {
      $this->nombre = $nuevoNombre;
    }
    public function obtenerNombre () {
      echo $this->nombre."<br/>";
    }
    public function asignarEdad ($nuevaEdad) {
      $this->edad = $nuevaEdad;
    }
    public function obtenerEdad () {
      echo $this->edad."<br/>";
    }
  }

  $alumno = new persona();
  $alumno->asignarNombre("Juan");
  $alumno->obtenerNombre();
  echo $alumno->nombre."<br/>";  // Puedo acceder con echo a la prop nombre porque es pública

  $alumno->asignarEdad(20);
  $alumno->obtenerEdad();


?>