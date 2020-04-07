<div class="titulo">Construtor e Destrutor</div>

<?php

   class Pessoa {

      public $nome;
      public $idade;

      /**
       * Class constructor.
       */
      public function __construct($novoNome, $idade = 18) {
         echo "Constructor invocado! <br<<br>";
         $this->nome = $novoNome;
         $this->idade = $idade;
      }

      function __destruct() {
         echo "Objeto morreu.";

      }

      public function apresentar () {
         echo "<br>{$this->nome}, {$this->idade} anos. <br>";
      }
   }

   $pessoa = new Pessoa("Arghus", 8);
   $pessoa->apresentar();
   unset($pessoa);