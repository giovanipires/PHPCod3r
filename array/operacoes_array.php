<div class="titulo">Operações com array</div>

<?php

   $dados1 = [
      "nome" => "José",
      "idade" => 28
   ];

   $dados2 = [
      "naturalidade" => "Fortaleza"
   ];

   $dados2["endereco"] = "Rua A, 123"; 

   $dadosCompletos = $dados1 + $dados2;
   print_r($dadosCompletos);
   echo '<br>';
   echo '<br>' . is_array($dadosCompletos);
   echo '<br>' . count($dadosCompletos);
   
   echo '<br>';
   $indice = array_rand($dadosCompletos);
   echo "$indice = $dadosCompletos[$indice]";
   echo '<br>';
   echo "{$dadosCompletos['idade']}";
   echo '<br>';
   echo "${dadosCompletos['idade']}";
   echo '<br>';
   unset($dadosCompletos["nome"]);
   echo '<br>';
   print_r($dadosCompletos);
   echo '<br>';
   unset($dadosCompletos);
   var_dump($dadosCompletos);
   
   $impares = [1,3,5,7,9];
   $pares = [0,2,4,6,8];
   $decimais = $pares + $impares;
   echo '<br>';
   print_r($decimais);

   $novosDecimais = array_merge($pares, $impares);
   echo '<br>';
   print_r($novosDecimais);
   
   sort($novosDecimais);
   echo '<br>';
   print_r($novosDecimais);

?>