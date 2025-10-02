<?php 

    include('conexao.php');

    $nome = $_GET['nome'];
    $matricula = $_GET['matricula'];
    $turma = $_GET['turma'];
    $email = $_GET['email'];

    echo "<h1>Aluno</h1>";
    echo $nome;
    echo "<br>";
    echo $matricula;
    echo "<br>";
    echo $turma;
    echo "<br>";
    echo $email;

    $insert = "INSERT INTO alunos VALUES('$matricula', '$turma', '$nome', '$email')";

    $conexao->query($insert);

?>