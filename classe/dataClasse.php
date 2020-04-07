<div class="titulo">Data Classe</div>

<?php

class Data {

   public $dia = 01;
   public $mes = 01;
   public $ano = 1970;

   public function apresentar() {
      return "Data: {$this->dia} / {$this->mes} / {$this->ano}.<br>";
   }

}

$d1 = new Data();
echo $d1->apresentar(); 

$d2 = new Data();
$d2->dia = 6;
$d2->mes = 11;
$d2->ano = 1980;
echo $d2->apresentar(); 