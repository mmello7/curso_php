<?php
    
    $teste = "String aqui";

    echo "$teste global 1 <br>";

    if(5>2){
        $teste = "Aqui String";

        echo "$teste global 1 <br>";
    }

    echo "$teste global 2<br>";

    function funcao ( ){

        $teste = "Aqui aqui String";
        echo "$teste global 2<br>";

    }

    funcao ( );

    function testandoGlobal ( ){

        $teste = "Cossorro";
        echo "$teste global função<br>";

    }
    testandoGlobal( );