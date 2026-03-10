<?php

    $x = 6;
    $y = 10;
    $z = 10;

    echo $x . "<br>";
    echo $y . "<br>";
    echo $z  . "<br>";
    if ($x == $y){
        echo "É igual! <br>";
    }
    else {
        echo "Não é igual <br>";
    }

    echo "<br>";
    echo "<br>";

    if ($y == $z){
        echo "É igual! <br>";
    }
    else {
        echo "Não é igual <br>";
    }

       echo "<br>";
       echo "<br>"; 

    $n = "Matheus";
    $m = "matheus";

    echo $n . "<br>";
    echo $m . "<br>";

    if ($n == $m){
        echo "é parecido <br>";
    }
    else {
        echo "Não é parecido! <br>";
    }

    echo "<br>";
    echo "<br>";

    if ($n === $m) {
        echo "É identico! <br>";
    }
    else {
        echo "Não é identico! <br>";
    }