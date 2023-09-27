<?php
function convertir_a_mayusculas($cadena) {
    $cadena_mayusculas = strtoupper($cadena);

    return $cadena_mayusculas;
}

$cadena_original = "Hola, Compañeros!";
$cadena_en_mayusculas = convertir_a_mayusculas($cadena_original);

echo "cadena original: " . $cadena_original . "<br>";
echo "cadena en mayusculas: " . $cadena_en_mayusculas;


?>