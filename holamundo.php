<?php
echo "Hola mundo";
echo "Mi nombre es Cielo Catalina Morales López";
$a=1;
$b=1;
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
?>
