<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
   <input type="text" name="param">
   <select name="convercao" id="convercao">
      <option value="km-milha">KM -> Milha</option>
      <option value="milha-km">Milha -> KM</option>
      <option value="metro-km">Metro -> KM</option>
      <option value="km-metro">KM -> Metro</option>
      <option value="c-f">Cº -> Fº</option>
      <option value="f-c">Fº -> Cº</option>
   </select>
   <button>Calcular</button>
</form>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_C_F = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['convercao']) {
   case 'km-milha':
      $distancia = $param * FATOR_KM_MILHA;
      $mensagem = "$param KM = $distancia Milhas";
      break;
   case 'milha-km':
      $distancia = $param / FATOR_KM_MILHA;
      $mensagem = "$param Milhas = $distancia KM";
      break;
   case 'metro-km':
      $distancia = $param / FATOR_METRO_KM;
      $mensagem = "$param Metros = $distancia KM";
      break;
   case 'km-metro':
      $distancia = $param * FATOR_METRO_KM;
      $mensagem = "$param KM = $distancia Metros";
      break;
   case 'c-f':
      $temperatura = ($param * FATOR_C_F) + 32;
      $mensagem = "$param Cº = $temperatura Fº";
      break;
   case 'f-c':
      $temperatura = ($param - 32) / FATOR_C_F;
      $mensagem = "$param Fº = $temperatura Cº";
      break;
   
   default:
      $mensagem = "Nenhum valor calculado";
      break;
}

echo "<p>$mensagem.</p>"

?>

<style>
   form > * {
      font-size: 1.7rem;
   }
</style>