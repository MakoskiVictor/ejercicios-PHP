<?php
//HERENCIA
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
  // CLASE TRABAJADOR HEREDA METODOS Y PROPIEDADES DE LA CLASE PERSONA
  class trabajador extends persona {
    public $puesto;

    public function asignarPuesto ($nuevoPuesto) {
      $this->puesto = $nuevoPuesto;
    }
    public function presentarse () {
      echo "Hola, mi nombre es ".$this->nombre." y soy ".$this->puesto."<br/>";
    }
  }

  $random = new trabajador();
  $random->asignarNombre("Eduardo");
  $random->asignarPuesto("programador");
  $random->presentarse();

?>