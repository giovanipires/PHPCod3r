<div class="titulo">Atribuiçoes</div>

<?php

   $title = 'Atribuições';
   $num = 10;
   echo '<br>' . $num;
   
   $num = $num - 1;
   echo '<br>' . $num;
   
   $num++;
   echo '<br>' . $num;
   
   --$num;
   $num--;
   echo '<br>' . $num;
   
   $num += 4;
   echo '<br>' . $num;
   
   $num *= 2;
   echo '<br>' . $num;
   $num /= 6;
   echo '<br>' . $num;
   $num %= 3;
   echo '<br>' . $num;
   $num **= 4;
   echo '<br>' . $num;
   $num .= 4;
   echo '<br>' . $num;
   
   // $valInexistente = 'Valor inexistente';
   $valInexistente = null;
   echo '<br>' . $valInexistente;
   $val = $valInexistente ?? 'Valor default';
   echo '<br>' . $val;

?>