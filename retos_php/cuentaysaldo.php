<?php
class Cuenta {
    public $numeroCuenta;
    public $saldo;

    public function __construct($numeroCuenta, $saldoInicial) {
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldoInicial;
    }

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }
}

$miCuenta = new Cuenta("123456789", 1000);

echo "Número de cuenta: " . $miCuenta->numeroCuenta . "<br>";
echo "Saldo inicial: $" . $miCuenta->saldo . "<br>";

$miCuenta->depositar(500);

echo "Nuevo saldo: $" . $miCuenta->saldo;
?>
