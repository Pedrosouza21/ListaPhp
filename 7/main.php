<?php
   echo "Sétimo Exercício- Calcule o volume de uma esfera, adicionando o valor do raio:";
   $V = 0;
   $R = 0; 
  
    echo "Digite o valor do raio: ";
    $R = (int)readLine();

   
    $V = 3.14 * ($R * $R);
    echo "Resultado é ".$V."";?>