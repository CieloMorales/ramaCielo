<?php
echo "Hola mundo";
echo "Mi nombre es Cielo Catalina Morales López";

function suma($a, $b) {
    return $a + $b;
}
function resta($a, $b) {
    return $a - $b;
}
function multiplicacion($a, $b) {
    return $a * $b;
}
function division($a, $b) {
    if ($b == 0) {
        return "No se puede dividir por cero";
    }
    return $a / $b;
}
echo suma(2,2);
echo resta(2,1);
echo multiplicacion(2,5);
echo division(10,2);
?>
