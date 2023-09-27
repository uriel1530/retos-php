<?php
class Animal {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

class Perro extends Animal {
    public $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }
}

$miPerro = new Perro("Max", 3, "Labrador");

echo "Nombre del perro: " . $miPerro->nombre . "<br>";
echo "Edad del perro: " . $miPerro->edad . " años<br>";
echo "Raza del perro: " . $miPerro->raza;
?>
