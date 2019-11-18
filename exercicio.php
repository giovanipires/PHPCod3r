<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="recursos/css/estilo.css">
   <link rel="stylesheet" href="recursos/css/exercicio.css">
   <title>Exercício | PHP Cod3r</title>
</head>
<body class="exercicio">
   <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Visualização do exercício</h2>
   </header>
   <nav class="navegacao">
      <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
      <a href="index.php" class="vermelho">Voltar</a>
   </nav>
   <main class="principal">
      <div class="conteudo">
         <?php
         // include('teste/teste.php');
         // include("/teste.php");
         // include($_GET['dir'] . "/teste.php");
         // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
         // include("{$_GET['dir']}/{$_GET['file']}.php");
         include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
         ?>
      </div>
   </main>
   <footer class="rodape">
      COD3R & ALUNOS <?= date('Y'); ?>
   </footer>
</body>
</html>