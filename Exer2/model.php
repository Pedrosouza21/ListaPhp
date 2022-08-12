<?php
class herois
{private $n="";
  private $f=0;
  private $v=0;
  public function __construct($n1, $f1, $v1)

  {$this->n=$n1; $this->f=$f1; $this->v=$v1;}

  public function getn(){return $this->n;}
  public function getf(){return $this->f;}
  public function getv(){return $this->v;}}
?>
