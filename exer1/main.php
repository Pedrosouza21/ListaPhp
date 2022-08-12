<?php
echo "Dada a matriz = [[2,4],[7,8]], elabore um programa que calcule a soma dos elementos desta matriz e mostre o resultado.";

$total=0;
$matriz = [[2,4],[7,8]];

foreach($matriz as[$c1 , $c2])
{
  $total+=$c1+$c2;
}
echo "\nA soma é " . $total . "\n";
?>