<?php
   echo "Sexto Exercício- Calcule a idade de uma pessoa adicionando o ano atual e o de nascimento:";
   $AA = 0; 
   $AN = 0; 
   $I = 0; 
   
  
    echo "Digite o ano atual: ";
    $AA = (int)readLine();
    echo "Digite o ano de nascimento: ";
    $AN = (int)readLine();

   $I = $AA - $AN;
    echo "Resultado é ".$I." anos";?>