<?php
  echo "Décimo Primeiro Exercício- Calcule a quantidade de tijolos que serão necessários para contruir uma parede adicionando os valores pedidos:";
   $QT;
   $CT;
   $LT; 
   $CP;
   $LP; 
   $T; 
   $P;

    echo "Digite o valor da Largura do tijolo: ";
    $LT = (int)readLine();
    echo "Digite o valor do Comprimento do tijolo: ";
    $CT = (int)readLine();
    echo "Digite o valor da Largura da parede: ";
    $LP = (int)readLine();
    echo "Digite o valor do Comprimento da parede: ";
    $CP = (int)readLine();
    $T = ($CT)*($LT);
    $P = ($CP)*($LP);
    $QT = ($T)*($P);
   echo "Será necessário ".$QT." tijolos"; ?>