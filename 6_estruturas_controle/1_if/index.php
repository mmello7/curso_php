<?php


//verdadeiro
if(2> 3) {
    echo "É maior";
} else {
    echo "É menor";
}

echo "<br>";


//falso
if (5>3) {
    echo "É maior";
} else {
    echo"É menor!";
}

echo "<br>";

//variáveis

$a = 10;
$b = 5;

$c = "Deu certo, entrou no if 3!<br>";

if ($a>$b){
    echo $c;
}