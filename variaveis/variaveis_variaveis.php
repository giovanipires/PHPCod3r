<div class="titulo">Variáveis variáveis</div>

<?php

   $a = 'valorA';
   $$a = 'valorAA';

   echo "$a";
   echo "<br> {$$a}";
   echo "<br><br> $a | {$$a} | ${$a} | $valorA";

   echo '<br> <br>';
   $epa = 'opa';
   $opa = 'vish';
   $vish = 'eita!!!';
   echo "$epa {$$epa} {$$$epa}";
   
?>