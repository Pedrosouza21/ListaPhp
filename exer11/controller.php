   <?php
   $CT = (double)$_GET['CT'];
   $LT = (double)$_GET['LT'];
   $CP = (double)$_GET['CP'];
   $LP = (double)$_GET['LP'];

   $T = ($CT)*($LT);
   $P = ($CP)*($LP);
   $QT = ($T)*($P);
   echo "Será necessário ".$QT." tijolos";?>