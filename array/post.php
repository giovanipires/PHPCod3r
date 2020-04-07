<div class="titulo">$_POST</div>

<form action="#" method="post">
   <div>
      <input type="text" name="nome" placeholder="Nome">
      <input type="text" name="sobrenome" placeholder="Sobrenome">
      <select name="estado" id="">
         <option value="1" selected>Selecione...</option>
         <option value="AC">Acre</option>
         <option value="BA">Bahia</option>
         <option value="RJ">Rio de Janeiro</option>
      </select>
   </div>
   <button>Enviar</button>
</form>

<?php

   print_r($_GET);
   echo '<br>';
   print_r($_POST);

?>

<style>
   form {
      font-size: 1.7rem;
   }
</style>