<div class="titulo">Switch</div>

<?php

$categoria = '';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
   $carro = 'Mercedes';
   $preco = 250000;
}elseif ($categoria === 'SUV') {
   $carro = 'Renegade';
   $preco = 80000;
}elseif ($categoria === 'Sedan') {
   $carro = 'Yaris';
   $preco = 65000;
}else {
   $carro = 'Mobi';
   $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro.<br>Preço: $precoFormatado.</p>";

$categoria = 'luxO';
switch (strtolower($categoria)) {
   case 'luxo':{
      $carro = 'Mercedes';
      $preco = 250000;
      break;
   }
   case 'suv':
   case 'suv Básico':
      $carro = 'Renegade';
      $preco = 80000;
      break;
   case 'sedan':
      $carro = 'Yaris';
      $preco = 65000;
      break;
      
      default:
      $carro = 'Mobi';
      $preco = 33000;
   break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro.<br>Preço: $precoFormatado.</p>";

?>