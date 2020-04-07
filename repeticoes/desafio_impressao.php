<div class="titulo">Desafio Impressão</div>

<!--
Enunciado:
- Imprima apenas os valores do array que contenham indice par;
- Desafio adicional: Resolver com for e foreach;
- Valores esperados: AAA, CCC, EEE;
-->

<?php

   $array = [
      "AAA",
      "BBB",
      "CCC",
      "DDD",
      "EEE",
      "FFF",
   ];

   print_r($array);
   echo '<hr>';

   for ($i=0; $i < count($array) ; $i++) { 
      if ($i %2 === 1) continue;
      echo "{$array[$i]} ";
   }

   echo '<br>';

   foreach ($array as $key => $value) {
      if ($key % 2 !== 0) continue;
      echo "$value ";
   }

?>