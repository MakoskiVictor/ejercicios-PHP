<?php
  // CONSTRUCTOR

  class persona {
    // Propiedades
    public $nombre; // public -> Puedo acceder desde cualquier lugar
    private $edad; // private -> Solo puedo acceder desde la clase
    protected $altura;    // protected -> Solo puedo acceder desde la clase y desde las clases hijas

    // CONSTRUCTOR
    function __construct($nombre, $edad, $altura) {
      $this->nombre = $nombre;
      $this->edad = $edad;
      $this->altura = $altura;
    }

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
    public function presentar () {
      echo "Hola, mi nombre es ".$this->nombre." tengo ".$this->edad." años y mido ".$this->altura." metros.<br/>";
    }
}

$fulano = new persona("Harry", 28, 1.86);
$fulano->presentar();

?>