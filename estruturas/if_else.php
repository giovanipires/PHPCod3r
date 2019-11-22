<div class="titulo">If & Else</div>

<?php

   if (true) {
      echo "Serei impresso 1. <br>";
      echo "Serei impresso 2. <br>";
      echo "Serei impresso 3. <br>";
   }

   echo '<br>---------------------------------<br>';

   if (false); {
      echo "Serei impresso 2.";
      echo "Será que serei impresso?";
   }

   echo '<br>---------------------------------<br>';
   
   if (true) {
      echo "Verdadeiro <br>";
   } else {
      echo "Falso <br>";
   }
   echo '<br>---------------------------------<br>';
   if (false) {
      echo "Verdadeiro <br>";
   } else {
      echo "Falso A<br>";
      echo "Falso B<br>";
   }
   echo "<br> Fim.";
   
   echo '<br>---------------------------------<br>';

   if (false) {
      echo "Passo A";
   } elseif (false) {
      echo "Passo A.1";
   } else {
      echo "Passo B";
   }
   echo '<br>';
   if (false) {
      echo "Passo A";
   } elseif (true) {
      echo "Passo A.1";
   } else {
      echo "Passo B";
   }
   echo '<br>';
   if (true) {
      echo "Passo A";
   } elseif (false) {
      echo "Passo A.1";
   } else {
      echo "Passo B";
   }
   echo '<br>';
   if (true) {
      echo "Passo A";
   } elseif (true) {
      echo "Passo A.1";
   } else {
      echo "Passo B";
   }
   echo '<br>';

?>