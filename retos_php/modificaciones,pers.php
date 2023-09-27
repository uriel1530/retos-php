<?php
class Persona {
    private $correo;
    private $telefono;

    public $nombre;
    public $edad;
    public function __construct($nombre, $edad, $correo, $telefono) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->telefono = $telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function presentarse() {
        echo "Hola, mi nombre es {$this->nombre}, tengo {$this->edad} años, mi correo electrónico es {$this->correo} y mi número de teléfono es {$this->telefono}.";
    }
}

class Estudiante extends Persona {
    private $matricula;

    public function __construct($nombre, $edad, $correo, $telefono, $carrera, $matricula) {
        parent::__construct($nombre, $edad, $correo, $telefono);
        $this->carrera = $carrera;
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function presentarse() {
        parent::presentarse();
        echo " Estudio {$this->carrera} y mi número de matrícula es {$this->matricula}.";
    }
}

$estudiante = new Estudiante("María", 20, "maria@example.com", "123-456-7890", "Medicina", "12345");

$estudiante->presentarse();
echo "<br>";

$estudiante->setCorreo("nuevo_correo@example.com");
$estudiante->setTelefono("987-654-3210");

$estudiante->setMatricula("54321");

$estudiante->presentarse();
?>
