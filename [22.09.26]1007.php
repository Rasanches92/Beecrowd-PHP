<?php
$valorA = intval(fgets(STDIN));
$valorB = intval(fgets(STDIN));
$valorC = intval(fgets(STDIN));
$valorD = intval(fgets(STDIN));

$diferenca = ($valorA * $valorB - $valorC * $valorD);

echo "DIFERENCA = $diferenca" . PHP_EOL;
?>