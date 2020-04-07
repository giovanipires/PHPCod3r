<div class="titulo">Primeira Classe</div>

<?php

class Pessoa {

  public $nome = "Anônimo";
  public $idade = 18;
  public $sexo = "M";

  public function apresentar() {
      return "Nome: {$this->nome} <br> Idade: {$this->idade} <br> Sexo: {$this->sexo}<br><br>"; 
  }

}

$p1 = new Pessoa();
$p1->nome = "Giovani";
$p1->idade = 39;
echo $p1->apresentar();

$p2 = new Pessoa();
$p2->nome = "Mariana";
$p2->idade = 38;
$p2->sexo = "F";
echo $p2->apresentar();