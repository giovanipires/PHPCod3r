<div class="titulo">Mapa</div>

<?php

   $dados = array(
      "idade" => 25,
      "cor" => "verde",
      "peso" => 49.8
   );

   print_r($dados);

   echo '<br>';
   
   echo '<br>' .$dados["idade"];
   echo '<br>' .$dados["cor"];
   echo '<br>' .$dados["peso"];
   echo '<br>';
   var_dump($dados["utra_informacao"]);

?>