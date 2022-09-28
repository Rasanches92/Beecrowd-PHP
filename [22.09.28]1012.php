<?php
$abc = explode(" ",fgets(STDIN));

$pi = 3.14159;

$rectangleTriangle = $abc[0] * $abc[2] / 2; //Base A e altura C
$circle = $pi * pow($abc[2],2); //Raio C
$trapezium = ($abc[0] + $abc[1]) * $abc[2] / 2; //A e B por base e C por altura
$square = $abc[1] * $abc[1]; //lados B
$rectangle = $abc[0] * $abc[1]; //lados A e B

echo "TRIANGULO: " . number_format($rectangleTriangle,3,'.','') . PHP_EOL;
echo "CIRCULO: " . number_format($circle,3,'.','') . PHP_EOL;
echo "TRAPEZIO: " . number_format($trapezium,3,'.','') . PHP_EOL;
echo "QUADRADO: " . number_format($square,3,'.','') . PHP_EOL;
echo "RETANGULO: " . number_format($rectangle,3,'.','') . PHP_EOL;
?>