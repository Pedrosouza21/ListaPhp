<?php
echo "Primeiro Exercício- Calcule a área desejada adicionando os valores pedidos:";

  $L = 0;
  $C = 0;
  $area = 0;

 echo "Digite o valor da Largura:";
 $L = (int)readLine();
 echo "Digite o valor do Comprimento: ";
 $C = (int)readLine(); 
 $area = $C * $L;
 echo "Resultado:".$area."\n"; ?>