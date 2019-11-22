<div class="titulo">Operadores relacionais</div>

<?php

   var_dump(1 == 1);
   var_dump(1 > 1);
   var_dump(1 >= 1);
   var_dump(1 != 1);
   var_dump(1 <> 1);
   var_dump(1 <= 1);
   var_dump(4 < 23);
   var_dump(1 == '1');
   var_dump(1 === '1');
   var_dump(1 !== '1');
   var_dump(1 != '1');

   echo "<p>Relacionais no if / else:</p> <hr>";
   $idade = 70;
   if ($idade < 18) {
      echo "A idade de $idade é considerado menor de idade.";
   } elseif ($idade >= 18 && $idade <= 65) {
      echo "A idade de $idade é considerado ativo socialmente para trabalhar.";
   } else {
      echo "A idade de $idade é de boas e esta aposentado.";
   }

   echo '<p>Spaceship</p><hr>';
   var_dump(50 <=> 5);
   echo "<br>";
   var_dump(50 <=> 50);
   echo "<br>";
   var_dump(5 <=> 50);
   echo "<br>";
   
   echo '<p>Valores podem ser V ou F</p><hr>';
   var_dump(!!5);
   echo "<br>";
   var_dump(!!0);
   echo "<br>";
   var_dump(!!"");
   echo "<br>";
   var_dump(!!" ");
   echo "<br>";


?>

<style>
   p {
      margin-bottom: 0px;
   }
   hr {
      margin-top: 0px;
   }

</style>