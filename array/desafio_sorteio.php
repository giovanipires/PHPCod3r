<div class="titulo">Desafio sorteio</div>

<?php

   $nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela", "Bela Adormecida"];

   $index = array_rand($nomes);

   echo "
      <div center>
         <h1>
            $nomes[$index]
         </h1>
      </div>";

?>

<style>
   [center] {
      display: flex;
      justify-content: center;
      font-size: 1.6rem;
      color: red;
   }

</style>