<div class="titulo">Variáveis</div>

<?php

   $numeroA = 13;
   echo $numeroA . '<br>';
   var_dump($numeroA);

   echo '<br>';
   echo '<br>';
   
   $a = 3;
   $b = 16;
   $soma = $a + $b;
   echo $soma . '<br>';
   echo isset($soma);
   
   echo '<br>';
   unset($soma);
   var_dump($soma);
   
   echo '<br>';
   echo '<br>';
   $variavel = 10;
   echo $variavel . '<br>';
   $variavel = 'Agora sou uma string';
   echo $variavel . '<br>';
   
   // Nome de variável

   $var = 'valida';
   $var2 = 'valida';
   $VAR = 'valida';
   $_var_4 = 'valida';
   $vâr5 = 'valida'; //evitar
   // $6var = 'invalida';
   // $%var = 'invalida';
   // $var8% = 'invalida';
   // $var9& = 'invalida';

   echo '<br>';
   var_dump($_SERVER["HTTP_HOST"]);

?>