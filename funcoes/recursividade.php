<div class="titulo">Recursividade</div>

<?php

   function somaUmAte($numero) {
      $soma = 0;
      for (; $numero >= 1 ; $numero--) { 
         $soma += $numero;
      }
      return $soma;
   }

   function somaUmAte2($numero) {
      $soma = 0;
      for ($i = 1; $i <= 1 ; $i++) { 
         $soma += $i;
      }
      return $soma;
   }



   echo somaUmAte(5) . "<br>";
   echo somaUmAte2(5) . "<br>";
   echo '<hr>';

   function somaRecursiva($numero) {
      if ($numero === 1) {
         return 1;
      }
      return $numero + somaRecursiva($numero - 1);
   }

   echo somaRecursiva(10) . "<br>";

   function somaRecursivaEconomica($numero) {
      return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
   }

   echo somaRecursivaEconomica(10) . "<br>";