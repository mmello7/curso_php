<?php
    $nome = "Maria";

    $pessoa =& $nome;

    echo $pessoa;
    echo "<br>";
    echo $nome;
    echo "<br>";

    $pessoa = "Julia";

    echo "Atribuição após ref";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $pessoa;
    echo "<br>";

    $nome = "Gabriel";

    echo "Atribuição após ref 2";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $pessoa;
    echo "<br>";