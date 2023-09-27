<?php
class Persona {
    public $nombre;
    public $edad;
    public $altura;

    public function __construct($nombre, $edad, $altura) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    public function saludar() {
        echo "¡Hola! Mi nombre es {$this->nombre}.";
    }

    public function obtener_edad() {
        return $this->edad;
    }

    public function obtener_altura() {
        return $this->altura;
    }
}

$persona = new Persona("Juan", 30, 1.75);

$persona->saludar();
echo "<br>";
echo "Edad: " . $persona->obtener_edad() . " años<br>";
echo "Altura: " . $persona->obtener_altura() . " metros";
?>
