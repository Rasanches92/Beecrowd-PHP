<?php
$numeroFuncionario = intval(fgets(STDIN));
$horasTrabalhadas = intval(fgets(STDIN));
$valorHora = floatval(fgets(STDIN));

$salario = $valorHora * $horasTrabalhadas;

echo "NUMBER = " . $numeroFuncionario . PHP_EOL; 
echo "SALARY = U$ " . number_format($salario , 2, '.', '') . PHP_EOL;
?>