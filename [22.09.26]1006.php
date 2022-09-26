<?php
$valorA = floatval(fgets(STDIN));
$valorB = floatval(fgets(STDIN));
$valorC = floatval(fgets(STDIN));

$media = ($valorA * 2 + $valorB * 3 + $valorC * 5) / 10;

echo "MEDIA = " . number_format($media, 1, '.', '') .PHP_EOL;
?>