<div class="titulo">Desafio FOR</div>

<!--
Usar o for...
#
##
###
####
#####
1) pode usar incremento ++
2) sem usar incremento ++
-->

<?php

$impressao = '';

for ($cont=0; $cont <=5 ; $cont++) { 
   $impressao .= '#';
   echo "$impressao <br>";
}

echo '<hr>';

for (
   $impressao2 = '#'; 
   $impressao2 !== '#######' ; 
   $impressao2 .= '#') { 
   # code...
   echo "$impressao2 <br>";
}

?>