<div class="titulo">Operadores Lógicos</div>

<?php

   echo "<p class='divisao'>V ou F:</p><hr>";
   var_dump(true);
   echo '<br>';
   var_dump(!true);
   
   echo "<p class='divisao'>Tabela verdade 'AND' (E):</p><hr>";
   var_dump(true && true);
   var_dump(true && false);
   var_dump(false && true);
   var_dump(false && false);
   var_dump(true && 3 > 2 && 7 >= 7);
   echo '<br>';
   var_dump(true and true);
   var_dump(true and false);
   var_dump(false and true);
   var_dump(false and false);
   var_dump(true and 3 > 2 && 7 >= 7);
   
   echo "<p class='divisao'>Tabela verdade 'OR' (OU):</p><hr>";
   var_dump(true || true);
   var_dump(true || false);
   var_dump(false || true);
   var_dump(false || false);
   var_dump(true || 3 > 2 or 7 >= 7);
   echo '<br>';
   var_dump(true or true);
   var_dump(true or false);
   var_dump(false or true);
   var_dump(false or false);
   var_dump(true or 3 > 2 or 7 >= 7);
   
   echo "<p class='divisao'>Tabela verdade 'XOR' (OU exclusivo):</p><hr>";
   var_dump(true xor true);
   var_dump(true xor false);
   var_dump(false xor true);
   var_dump(false xor false);
   var_dump(true xor 3 > 2 xor 7 >= 7);
   echo '<br>';
   var_dump(true != true);
   var_dump(true != false);
   var_dump(false != true);
   var_dump(false != false);
   
   echo "<p class='divisao' class='divisao'>Exemplo:</p><hr class='divisao'>";
   $idade = 63;
   $sexo = 'M';

   $pagouPrevidencia = true;
   $criterioHomem = ($idade >=65 && $sexo === 'M');
   $criterioMulher = ($idade >=60 && $sexo === 'F');
   $atingiuCriterio = $criterioHomem || $criterioMulher;
   $podeAposentar = $pagouPrevidencia && $atingiuCriterio;
   echo "Pode se aposentar -> $podeAposentar. <br>";

   if ($idade >= 60 && $sexo === 'F') {
      echo "Pode se aposentar -> $sexo";
   } elseif ($idade >= 65 && $sexo === 'M') {
      echo "Pode se aposentar -> $sexo";
   } else {
      echo 'Vai ter que trabalhar mais um pouco...';
   }
