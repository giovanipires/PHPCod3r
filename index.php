<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="recursos/css/estilo.css">
   <title>PHP Cod3r</title>
</head>
<body>
   <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice dos exercícios</h2>
   </header>
   <main class="principal">
      <div class="conteudo">
         <nav class="modulos">
            <div class="modulo verde">
               <h3>Módulo - Básico</h3>
               <ul>
                  <li>
                     <a href="exercicio.php?dir=basico&file=ola">
                        Olá PHP
                     </a>
                  </li>
                  <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                  <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                  <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                  <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP 1</a></li>
               </ul>
            </div>
            <div class="modulo vermelho">
               <h3>Módulo - Tipos</h3>
               <ul>
                  <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
               </ul>
            </div>
            <!-- <div class="modulo azul">
               <h3>Módulo 03</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo roxo">
               <h3>Módulo 04</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo laranja">
               <h3>Módulo 05</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo verde-escuro">
               <h3>Módulo 06</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo vermelho-escuro">
               <h3>Módulo 07</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo azul-escuro">
               <h3>Módulo 08</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
            <!-- <div class="modulo roxo-escuro">
               <h3>Módulo 09</h3>
               <ul>
                  <li><a href="">Exercícios A</a></li>
                  <li><a href="">Exercícios B</a></li>
                  <li><a href="">Exercícios C</a></li>
               </ul>
            </div> -->
         </nav>
      </div>
   </main>
   <footer class="rodape">
      COD3R & ALUNOS <?= date('Y'); ?>
   </footer>
</body>
</html>