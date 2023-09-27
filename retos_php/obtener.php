<?php
function obtener_edad($año_nacimiento) {
    $año_actual = date('Y'); 
    $edad = $año_actual - $año_nacimiento;
    return $edad;
}

$año_de_nacimiento = 1990; 
$edad_actual = obtener_edad($año_de_nacimiento);

echo "La edad actual es: " . $edad_actual . " años";
?>
