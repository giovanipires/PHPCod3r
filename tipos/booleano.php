<div class="titulo">Tipos Booleanos</div>

<?php

   echo TRUE;
   echo '<br>';
   echo FALSE;
   echo '<br>';

   echo var_dump(true).'<br>';
   echo var_dump(false).'<br>';
   
   echo var_dump('false').'<br>';
   echo is_bool(false).'<br>';
   echo is_bool('true').'<br>';

   // Fazer as regras de conversão

   echo '<p>Regras:</p>';
   echo '<br>' . var_dump((bool) 0); //apenas zero é false
   echo '<br>' . var_dump((bool) ""); // false
   echo '<br>' . var_dump((bool) "0"); //false
   echo '<br>' . var_dump((bool) 0.0); //false
   echo '<br>' . var_dump(!"false"); //false 
   echo '<br>' . var_dump((bool) 20); 
   echo '<br>' . var_dump((bool) -1); 
   echo '<br>' . var_dump((bool) 0.0000001); 
   echo '<br>' . var_dump((bool) " "); 
   echo '<br>' . var_dump((bool) "00"); 
   echo '<br>' . var_dump((bool) "false"); 
   echo '<br>' . var_dump(!!"false"); 


?>