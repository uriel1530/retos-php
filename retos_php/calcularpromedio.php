<?php 
function calcular_promedio($numeros) {
    if (empty($numeros)) {
        return 0;
    }

$total = array_sum($numeros);
    $promedio = $total / count($numeros);
    return $promedio;
}

$array_numeros = [10, 20, 30, 40, 50];
$promedio = calcular_promedio($array_numeros);

echo "El promedio es:" . $promedio;


?>