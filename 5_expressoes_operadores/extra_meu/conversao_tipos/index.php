<?php

$numero = "10";          // tipo string
$inteiro = (int) $numero; // converte para inteiro
$float = (float) $numero; // converte para float
$bool = (bool) $numero;   // converte para boolean
$string = (string) 123;   // converte para string

echo gettype($inteiro). "<br>"; // int
echo gettype($float). "<br>";   // double (nome interno de float)
echo gettype($bool). "<br>";    // boolean
echo gettype($string). "<br>";  // string
?>
