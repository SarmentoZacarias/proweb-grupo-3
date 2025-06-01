<?php

include_once './connection.php';

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];
$codigo_estudante = $_POST['codigo_estudante'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$c_senha = $_POST['c_senha'];

if($c_senha == $senha){
      
    $query_5 = "SELECT * FROM users WHERE telefone = '$telefone' ";
    $result_5 = mysqli_query($connect, $query_5);
    $row_5 = mysqli_fetch_array($result_5);

    if($row_5['telefone'] != $numero){
        $query = "INSERT INTO users (nome, apelido, codigo_estudante, telefone, email, senha, data_visita)"
        . " VALUES ('"
        . "$nome','$apelido','$codigo_estudante','$telefone', '$email', '$c_senha',NOW())";
        $result = mysqli_query($connect, $query);

        if($result){
            $query_1 = "SELECT * FROM users WHERE telefone = '$numero' AND senha = '$senha'";
            $result_1 = mysqli_query($connect, $query_1);
            $dado = mysqli_fetch_array($result_1);
        }
    }
}