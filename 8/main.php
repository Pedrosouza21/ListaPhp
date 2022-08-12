<?php
echo "Oitavo Exercício- Calcule o valor a ser pago pelo período de estacionamento do automóvel, adicionando hora e minuto de entrada, hora e minuto de saída:";
 $PG = 0;
 $HE = 0;
 $ME = 0;
 $HS = 0; 
 $MS = 0;
  
   
   echo "Digite a hora de entrada: ";
    $HE = (int)readLine();
    echo "Digite o minuto de entrada: ";
    $ME =  (int)readLine();
    echo"Digite a hora de saída: ";
    $HS = (int)readLine();
    echo "Digite a minuto de saída: ";
    $MS  = (int)readLine();

    $PG = (($HS - $HE) * 60 - ($MS - $ME)) /15;
    echo "O valor a se pagar é:  {0} reais", $PG;