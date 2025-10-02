<?php 

    include 'conexao.php';

    $isbn = $_GET['isbn'];

    $conexao->query("DELETE FROM livros WHERE isbn = $isbn");

    header('location:index.php');

?>