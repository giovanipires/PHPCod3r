<div class="titulo">Funções anônimas</div>

<?php

$soma = function ($a, $b) {
   return $a + $b;
};

$multiplicacao = function ($a, $b) {
   return $a * $b;
};


echo $soma(1, 2) . "<br>";

function executar($a, $b, $op, $funcao) {
   $resultado = $funcao($a , $b);
   echo "$a $op $b = $resultado <br>";
}

function divisao($a, $b) {
   return $a / $b;
};

executar(2, 3, '+', $soma);
executar(2, 3, 'x', $multiplicacao);
executar(2, 3, '/', divisao);