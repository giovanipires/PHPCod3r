<div class="titulo">Constantes</div>

<?php

   define('TAXA_DE_JUROS', 5.9);
   echo TAXA_DE_JUROS;

   const NOVA_TAXA = 2.5;
   echo '<br>' . NOVA_TAXA;

   const NOVISSIMA_TAXA = 2.8 + 1.2;
   echo '<br>' . NOVISSIMA_TAXA;

   echo '<br>';

   echo '<br> Versão do PHP: ' . PHP_VERSION;
   echo '<br> Linha que esta: ' . __LINE__;
   echo '<br> Nome do arquivo: ' . __FILE__;
   echo '<br> Diretório do arquivo: ' . __DIR__;



?>