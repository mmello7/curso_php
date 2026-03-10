<?php

    function adicao ($a, $b){
        echo "Digite o primeiro número: ";
        $a = trim(fgets(STDIN));
        echo "<br>";
        echo "Digite o segundo número: ";
        $b = trim(fgets(STDIN));
        echo "<br>";
        echo $a + $b;
        echo "<br>";
    }

    function subtracao ($a, $b){
        echo "Digite o primeiro número: ";
        $a = trim(fgets(STDIN));
        echo "<br>";
        echo "Digite o segundo número: ";
        $b = trim(fgets(STDIN));
        echo "<br>";
        echo $a - $b;
        echo "<br>";
    }

    function multiplicacao ($a, $b){
        echo "Digite o primeiro número: ";
        $a = trim(fgets(STDIN));
        echo "<br>";
        echo "Digite o segundo número: ";
        $b = trim(fgets(STDIN));
        echo "<br>";
        echo $a * $b;
        echo "<br>";
    }

    function divisao ($a, $b){
        echo "Digite o primeiro número: ";
        $a = trim(fgets(STDIN));
        echo "<br>";
        echo "Digite o segundo número: ";
        $b = trim(fgets(STDIN));
        echo "<br>";
        if ($a < $b){
            echo "Favor, digite o maior valor primeiro!";
            return divisao();
        } else {
            echo $a/$b;
            echo "<br>";
        }
    }

    echo "Escolha uma operação: <br> a - Adição <br> b - Subtração <br> c - Multiplicação <br> d - Divisão";
    $escolha = trim(fgets(STDIN));

    if ($escolha == a){
        adicao();
    }
    if ($escolha ==b){
        subtracao();
    }

    if ($escolha == c){
        multiplicacao();
    }
    
    if ($escolha ==d){
        divisao();
    }
    else {
        echo "Erro, reinicie a página";
    }