<div class="titulo">While / Do While</div>

<?php

   const VALOR_LIMITE = 5;

   $cont = 0;
   
   while ($cont <= VALOR_LIMITE) {
      echo "WHILE -> $cont <br>";
      $cont++;
   }
   
   echo '<hr>';
   
   $cont = 0;
   do {
      echo "DO/WHILE -> $cont <br>";
      $cont++;
   } while ($cont <= VALOR_LIMITE);
   
   echo '<hr>';
   
   $cont = 0;
   for ($cont=0; $cont <= VALOR_LIMITE; $cont++) { 
      echo "FOR -> $cont <br>";
   }
   
   echo '<hr>';

   $cont = 0;
   while (true) {
      echo "WHILE(TRUE) -> $cont <br>";
      $cont++;
      if($cont > VALOR_LIMITE) break;
   }

?>