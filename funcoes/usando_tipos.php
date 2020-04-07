<div class="titulo">Usando Tipos</div>

<?php

function soma($a, $b) {
   echo "<span>Somando $a + $b = </span>";
	return $a + $b;
}

echo soma(1,2). "<br>";
echo soma(1.7, 2.5). "<br>";
echo soma(1, '4edois'). "<br>";

function soma1(int $a, int $b) {
   echo "<span>Somando $a + $b = </span>";
   return $a + $b;
}

echo soma1(1,2). "<br>";
echo soma1(1.7, 2.5). "<br>";
echo soma1(1, '4edois'). "<br>";

function soma3($a, $b): int {
   echo "<span>Somando $a + $b = </span>";
   return $a + $b;
}

echo soma1(1,2). "<br>";
echo soma1(1.7, 2.5). "<br>";
echo soma1(1, '4edois'). "<br>";