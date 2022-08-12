<?php
   echo "Décimo Exercício- Adicione duas variáveis para que haja a troca de valores entre elas:";
   $A = 0;
   $B = 0; 
   $A1 = 0; 
   $B1 = 0;
    echo "Digite o valor da variével A: ";
    $A = (int)readLine();
    echo "Digite o valor da variável B: ";
    $B = (int)readLine();
    $A1 = (2*$B)-$B;
    $B1 = (2*$A)-$A;
   echo "Resultado: A=".$A1.", B=".$B1."";?>