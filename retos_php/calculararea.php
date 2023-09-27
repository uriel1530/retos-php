<?php
function calcular_area_circulo($radio) {
    $area = M_PI * pow($radio, 2);

    return $area;
}

$radio = 9;
$area_circulo = calcular_area_circulo($radio);

echo "El area de circuo con radio $radio es:" . $area_circulo;


?>