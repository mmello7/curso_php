<?php
    $a = 12;
    $b = 1.5;

    if(is_float($a)){ //false
        echo "É um float <br>";
    } else {
        echo "Não é um float <br>";
    }
    if(is_float($b)){ //true
        echo "É um float <br>";
    } else {
        echo "Não é um float <br>";
    }