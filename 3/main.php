<?php

   echo " Quarto Exercício- Calcule quanto será pago um produto, sendo o preço do mesmo e o desconto os valores de preferência:";
   $total = 0;
   $PAG = 0;
   $PR = 0;
   $D = 0;

    echo "Digite o valor do produto: ";
    $PR = (int)readLine();
    echo "Digite o valor do desconto: ";
    $D = (int)readLine();
    
    $total = ( $D/100.0 ) * $PR;
    $PAG = $PR - $total;
    echo "Resultado é ".$PAG."";?>