<?php
$abc = explode(" ", fgets(STDIN));

function maior($m,$n){
    return ($m + $n + abs($m - $n)) / 2;
}
   
echo maior(maior($abc[0], $abc[1]), $abc[2]) . " eh o maior" . PHP_EOL;
?>