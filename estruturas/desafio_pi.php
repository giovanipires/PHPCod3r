<div class="titulo">Desafio PI</div>

<?php

echo "O valor de PI é ". pi();
$pi = 3.14;

echo "<br>";
echo "<br>";

echo '<hr>';
var_dump($pi);
echo "<br>";
var_dump(pi());
echo '<hr>';

// Exatamente iguais

echo "<p>Os valores da variável pi e da função pi são exatamente iguais?</p>";

if ($pi == pi()) {
   echo "<br> Iguais.";
} else {
   echo "<br> Diferentes!";
}
echo '<hr>';

// Operador Relacional
$piErrado = 2.8;

// Utilizando operadores veja se a variável pi criada é aceita como igual, podendo ter um minimo de diferença entre eles
// Resposta

echo "<p>Os valores da variável pi e da função pi são bem próximos, diferença miníma aceita?</p>";

if ($pi - pi() <= 0.01) {
   echo "<br> Praticamente iguais.";
} else {
   echo "<br> Diferentes!";
}

echo '<hr>';

echo "<p>Os valores da variável pi e da piErrado são bem próximos, diferença miníma aceita?</p>";

if ($pi -$piErrado <= 0.01) {
   echo "<br> Praticamente iguais.";
} else {
   echo "<br> Diferentes!";
}

?>

<style>
   p {
      margin-bottom: 0px;
   }
</style>