<?php
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }
}

class Estudiante extends Persona {
    public $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function estudiar() {
        echo "Soy estudiante de la carrera de {$this->carrera} y estoy estudiando.";
    }

    public function presentarse() {
        parent::presentarse();
        echo " Estudio {$this->carrera}.";
    }
}

$estudiante = new Estudiante("Maria", 20, "Medicina");

$estudiante->presentarse();
echo "<br>";

$estudiante->estudiar();
?>
