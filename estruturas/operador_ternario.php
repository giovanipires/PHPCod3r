<div class="titulo">Operador ternário</div>

<?php

$idade = 70;
$status;

if($idade >= 18) {
   $status = 'Maior de idade.';
}else {
   $status = 'Menor de idade.';
}

echo "$status ($idade)<br>";

$idade = 16;
$status = $idade >= 18 ? 'Maior de idade.' : 'Menor de idade.';
echo "$status ($idade)<br>";

?>