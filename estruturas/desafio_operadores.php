<div class="titulo">Desafio Operadores Lógicos</div>

<!--
   Doisa trabalhos -> terça e quinta!
   - Se os dois forem executados -> TV 50' e Sorvete;
   - Se apenas um for executado -> TV 32' e Sorvete;
   - Se nenhum for executado -> Fica em casa pois não tem dinheiro;
-->

<form action="#" method="post">
   <div>
      <label for="t1">Trabalho 1 (terça):</label>
      <select name="t1" id="t1">
         <option value="1">Executando</option>
         <option value="0">Não executando</option>
      </select>
   </div>
   <div>
      <label for="t2">Trabalho 2 (quinta):</label>
      <select name="t2" id="t2">
         <option value="1">Executando</option>
         <option value="0">Não executando</option>
      </select>
   </div>
   <button>Executar</button>
</form>

<style>
   button, select {
      font-size: 1.6rem;
   }
</style>

<?php

$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if ($t1 && $t2) {
   $tv = '50"';
} elseif ($t1 xor $t2) {
   $tv = '32"';
}

if ($t1 || $t2) {
   $sorvete = true;
}

if ($tv) {
   $resultado = "Vamos comprar uma TV de $tv";
} else
   $resultado = "Sem TV dessa vez :(";

   $saudavel = !$sorvete;

   if($saudavel) {
      $resultado .= '<br>Estamos mais saudáveis!';
   }else {
      $resultado .= '<br>Sorvete liberado!';
   }
   echo "<p>$resultado</p>";


?>