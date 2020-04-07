<div class="titulo">Comparações de arrays</div>

<?php

   $arr1 = ['nome' => 'Maria', 'idade' => 20];
   $arr2 = ['nome' => 'Maria', 'idade' => 20];
   var_dump($arr1 == $arr2);
   echo '<br>';
   var_dump($arr1 === $arr2);
   echo '<br>';
   
   
   $arr3 = ['idade' => 20, 'nome' => 'Maria'];
   var_dump($arr1 == $arr3);
   echo '<br>';
   var_dump($arr2 === $arr3);
   echo '<br>';
   var_dump($arr1 != $arr3);
   echo '<br>';
   var_dump($arr1 !== $arr3);
   ?>