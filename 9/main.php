<?php
echo "Nono Exercício- Calcule o valor em reais, correspondente aos doláres que o turista possui no cofre do hotel, adicionando o que é pedido:";
  $VR = 0;
  $VD = 0; 
  $CO = 0; 

    echo "Digite a quatia em doláres que há no cofre: ";
    $VD = (int)readLine();
    echo "Digite a cotação do dólar hoje: ";
    $CO = (int)readLine();
    $VR = ($VD) * ($CO);
   echo "A quantia em Reais é ".$VD." * ".$CO."=".$VR."";?>