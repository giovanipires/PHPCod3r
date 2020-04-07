<div class="titulo">Multidimensionais</div>

<?php

   $dados = [
      [
         "nome" => "Roberto",
         "idade" => 26,
         "naturalidade" => 'São Paulo'
      ],
      [
         "nome" => "Maria",
         "idade" => 23,
         "naturalidade" => 'Bahia'
      ],
   ];

   
   $dados[] = [
      "nome" => "Florinda",
      "idade" => 65,
      "naturalidade" => 'Cidade del Mexico'
   ];

   $dados[2]["vizinho"] = "Chaves";
      
      print_r($dados);
      echo '<br>' . $dados[0]['idade'];
      echo '<br>' . $dados[1]['idade'];
      echo '<br>' . $dados[2]['idade'];
      
      unset($dados[2]["vizinho"]);
      print_r($dados);
?>