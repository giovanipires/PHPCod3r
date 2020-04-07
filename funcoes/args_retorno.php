<div class="titulo">Argumentos e retornos</div>

<?php

function obterMensagem() {
	return 'Sejam bem vindos!';
}

obterMensagem();

$m = obterMensagem();

echo "$m <br>";
echo obterMensagem() . "<br>";
var_dump(obterMensagem());

echo "<hr>";

function obterMensagemComNome($nome) {
	return "Seja bem vindo, {$nome}!";
}

echo obterMensagemComNome('Giovani') . "<br>";
echo obterMensagemComNome('Marianna') . "<br>";
echo "<hr>";

function soma($a, $b) {
	return $a + $b;
}

$x = 4;
$y = 5;

echo "<br>". soma(45, 78);
echo "<br>". soma($x, $y);
echo "<hr>";

function trocaValor($a, $novoValor) {
	$a = $novoValor;
}

$var = 1;
trocaValor($var, 3);
echo '<br>' . $var;

function trocaValorDeVerdade(&$a, $novoValor) {
	$a = $novoValor;
}

trocaValorDeVerdade($var, 5);
echo "<br>" . $var;

?>