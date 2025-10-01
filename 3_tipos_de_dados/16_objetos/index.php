<?php 
    class Pessoa {
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $mateus = new Pessoa();

    $mateus -> nome = "Mateus";

    echo $mateus->nome;

    echo "<br>";

    $mateus ->falar();
?>