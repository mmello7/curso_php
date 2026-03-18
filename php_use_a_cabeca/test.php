<?php
    class Aluno{
        private $nome;
        private $nota1;
        private $nota2;
        private $nota3;

        public function __construct($nome, $nota1, $nota2, $nota3){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
        }

        public function calcularMedia(){
            return ($this->nota1+$this->nota2+$this->nota3)/3;
        }

        public function situacao(){
            $media = $this->calcularMedia();
            if ($media >= 7){
                return "Aprovado!";
            } else if ($media >= 5) {
                return "Recuparação";
            } else{
                return "Reprovado!";
            }
        }

        public function getNome(){
            return $this->nome;
        } 
        public function getN1(){
            return $this->nota1;
        }
        public function getN2(){
            return $this->nota2;
        }
        public function getN3(){
            return $this->nota3;
        }
    }


?>