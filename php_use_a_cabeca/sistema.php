<?php 

require_once "test.php";

$alunos=[];

echo "Quantos alunos deseja cadastrar? ";
$qtd = (int) readline();

for ($i = 0; $i < $qtd; $i++){
    echo "\nAluno " . ($i + 1) . "\n";

    echo "Nome: ";
    $nome = readline();

    echo "Nota 1: ";
    $nota1 = readline();

    echo "Nota 2: ";
    $nota2 = readline();

    echo "Nota 3: ";
    $nota3 = readline();

    $alunos[] = new Aluno($nome, $nota1, $nota2, $nota3);
}

echo "\n----------------------Relatório----------------------\n\n";

foreach($alunos as $a){
    echo "Nome: " . $a->getNome() . "\n";
    echo "Média: " . number_format($a->calcularMedia(), 2). "\n";
    echo "Situação: ". $a->situacao() . "\n";
    echo "--------------------------------------------\n\n";
}
?>