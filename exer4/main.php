<?php
echo "Elabore um programa que receba um valor i e um valor j que representam respectivamente linha e coluna e crie uma matriz com valores aleatórios. Por exemplo: $i = 3, $j= 2, então:

                  [[4,5],
                  [3,5],
                  [6,8]]

Os valores de cada i,j são gerados aleatoriamente.";

echo "\n\nDigite a quantida de linhas: ";
$qtdlinhas = (int)readline();
echo"Digite a quantidade de colunas: ";
$qtdcol = (int)readline();
$matriz=[];
for($i=0; $i<$qtdlinhas; $i++)
{
  echo"\n";
  for($j=0 ; $j<$qtdcol; $j++)
  {
    $matriz[$i][$j] = rand(0,999);
    echo $matriz[$i][$j]." ";
  }
}
?>
