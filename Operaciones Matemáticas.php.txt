<?php
// ---------------------------------------
// 1) Suma - operador +
// ---------------------------------------
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma<br>"; // Resultado esperado: 11

// ---------------------------------------
// 2) Resta - operador -
// ---------------------------------------
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta<br>"; // Resultado esperado: 7

// ---------------------------------------
// 3) Multiplicación - operador *
// ---------------------------------------
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicación de $num1 y $num2 es: $multiplicacion<br>"; // Resultado esperado: 30

// ---------------------------------------
// 4) División - operador /
// ---------------------------------------
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La división de $num1 y $num2 es: $division<br>"; // Resultado esperado: 5

// ---------------------------------------
// 5) Módulo (residuo de una división) - operador %
// ---------------------------------------
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo<br>"; // Resultado esperado: 3

// ---------------------------------------
// 6) Potenciación - operador **
// ---------------------------------------
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia<br>"; // Resultado esperado: 8

// ---------------------------------------
// Redondeo de números: round(), ceil() y floor()
// round()  -> redondea al entero más cercano
// ceil()   -> redondea siempre hacia arriba
// floor()  -> redondea siempre hacia abajo
// ---------------------------------------
$numero = 4.6;
$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El número redondeado es: $redondeado<br>";               // 5
echo "El número redondeado hacia arriba es: $redondeado_arriba<br>"; // 5
echo "El número redondeado hacia abajo es: $redondeado_abajo<br>";   // 4

// ---------------------------------------
// Valor absoluto: abs()
// Devuelve el número sin su signo negativo
// ---------------------------------------
$numero2 = -7;
$valor_absoluto = abs($numero2);
echo "El valor absoluto de $numero2 es: $valor_absoluto<br>"; // 7
?>
