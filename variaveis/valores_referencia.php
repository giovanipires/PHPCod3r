<div class="titulo">Valores por referência</div>

<?php

$a = 3;
$b = $a;
echo $a;
echo "<br> $b";
$a = 5;
echo "<br> $a";
echo "<br> $b";

echo '<br>-----------------------';

$c = 6;
$d = &$c;
echo "<br> $c";
echo "<br> $d";
$c = 12;
echo "<br> $c";
echo "<br> $d";




?>