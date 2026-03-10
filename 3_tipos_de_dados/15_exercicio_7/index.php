<?php
    $pessoa1 = [
        "nome" => "João",
        "idade" => 25,
        "cidade" => "São Paulo"
    ];
    $pessoa2 = [
        "nome" => "Maria",
        "idade" => 15,
        "cidade" => "Rio de Janeiro"
    ];

    print_r($pessoa1);
    echo "<br>";
    print_r($pessoa2);
    echo "<br>";
    echo "<br>";

    if ($pessoa1["idade"] >= 18) {
        echo $pessoa1["nome"] . " é maior de idade.\n";
    } else {
        echo $pessoa1["nome"] . " é menor de idade.\n";
    }
    echo "<br>";
    echo "<br>";
    if ($pessoa2["idade"] >= 18) {
        echo $pessoa2["nome"] . " é maior de idade.\n";
    } else {
        echo $pessoa2["nome"] . " é menor de idade.\n";
    }
    
?>