<?php
$valorA = floatval(fgets(STDIN));
$valorB = floatval(fgets(STDIN));

$media = ($valorA * 3.5 + $valorB * 7.5) / 11;

echo "MEDIA = " . number_format($media, 5, '.', '') .PHP_EOL;
?>