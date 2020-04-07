<div class="titulo">Função & Escopo</div>

<?php

function imprimeMensagens() {
   echo "Olá,";
   echo " até a próxima!";
   echo "<br>";
}

imprimeMensagens();
imprimeMensagens();
imprimeMensagens();

echo "<hr>";

$var = 1;

function trocaValor() {
   $var = 2;
   echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

echo "<hr>";

function trocaValorDeVerdade() {
   global $var;
   $var = 3;
   echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";

echo "<hr>";

var_dump(trocaValor());
echo "<br>";
var_dump(trocaValorDeVerdade());

?>