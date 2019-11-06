<?php
    class Pessoas {
        public $nome;
        private $idade;
        protected $cpf;
        private $email;
        
        public function mudarIdade($idade){
            $this->idade = $idade;
        }

        public function acessarIdade(){
            return $this->idade;
        }
       public function falar(){
            echo 'Eai';
        }
    }
?>