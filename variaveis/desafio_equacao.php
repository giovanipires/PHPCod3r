<div class="titulo">Desafio Equação</div>

<?php

   $numA = (6 * (3 + 2)) ** 2;
   $denA = 3 * 2;

   $numB = (1 - 5) * (2 - 7);
   $denB = 2;

   $supA = $numA / $denA;
   $supB = ($numB / $denB) ** 2;

   $supTotal = ($supA - $supB) ** 3;
   $denTotal = 10 ** 3;

   $total = $supTotal / $denTotal;
   echo "O resultado final é: " . $total . '<br>';




?>