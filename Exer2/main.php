<?php
echo "Crie uma classe Heroi com os seguintes atributos:\nnome:String, forca:Int, vida:Int.";

require("model.php");
echo"\nNome do herói: ";
$n=readline();
echo"Força do herói: ";
$f=(Integer)readline();
echo"Vida do herói: ";
$v=(Integer)readline();
$heroi=new herois($n, $f, $v);
echo "\nDados do Herói:\nnome:".$heroi->getn()."\nvida: ".$heroi->getv()."\nforca: ".$heroi->getf();?>