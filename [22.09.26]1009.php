<?php
$nomeVendedor = strval(fgets(STDIN));
$salarioFixo = floatval(fgets(STDIN));
$totalVenda = floatval(fgets(STDIN));

$total = $salarioFixo + $totalVenda * 0.15;

echo "TOTAL = R$ " . number_format($total, 2, '.',''). PHP_EOL;
?>
