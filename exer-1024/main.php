<?php
echo "Décimo (Vigésimo Quarto) Exercício- Construa um algoritmo que calcule e apresente a idade REAL de uma pessoa. Será fornecido pelo usuário: DN – dia do nascimento DH – dia da data de hoje MN – mês do nascimento MH – mês da data de hoje AN – ano do nascimento AH – ano da data de hoje OBS: Lembre-se de validar e entrada dos valores dos meses (1 até 12 apenas) e dos dias (1 até 31 apenas).";
    $dn = 0; $mn = 0; $an = 0; $dh = 0; $mh = 0; $ah = 0; $id = 0; $id1 = 0;$id2 = 0;

   echo "\nDigite o dia de nascimento:";
   $dn  = (int)readLine();
   echo "\nDigite o mês de nascimento:";
   $mn  = (int)readLine();
   echo "\nDigite o ano de nascimento:";
   $an  = (int)readLine();
   echo "\nDigite o dia atual:";
   $dh  = (int)readLine();
   echo "\nDigite o mês atual:";
   $mh  = (int)readLine();
   echo "\nDigite o ano atual:";
   $ah  = (int)readLine();
   $id = $ah - $an;
   $id1 = $mh - $mn;
   $id2 = $dh - $dn;
   echo "\nSua idade real é " . $id . " anos, " . $id1 . " meses e " . $id2 . " dias";?>