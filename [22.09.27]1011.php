<?php
$r = fgets(STDIN);
$pi = 3.14159;

$volume = (4/3.0) * $pi * pow($r,3);

echo "VOLUME = " . number_format($volume,3,".","") . PHP_EOL;
?>