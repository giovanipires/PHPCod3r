<div class="titulo">Array Constante</div>

<?php

   const FRUTAS = ['Laranja', 'Abacaxi'];

   // FRUTAS[0] = 'banana';
   // FRUTAS[] = 'banana';

   echo FRUTAS[0];

   define('CIDADES', array('Belo Horizonte', 'Recife'));
   // CIDADES[] = 'Rio de Janeiro';
   echo '<br>' . CIDADES[1];
 
?>