<?php
// Problema #2 - Laboratorio
// Calculadora que realiza suma, resta, multiplicación y redondeo de decimales

$num1 = 10.567;
$num2 = 3.2;

// Operaciones básicas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

// round() redondea cada resultado a 2 decimales
echo "Suma: " . round($suma, 2) . "<br>";
echo "Resta: " . round($resta, 2) . "<br>";
echo "Multiplicación: " . round($multiplicacion, 2) . "<br>";
?>
