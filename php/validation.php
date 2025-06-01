<?php
session_start();

include_once './connect.php';

$user = $_POST['user'];
$senha = $_POST['senha'];

$query = "SELECT * FROM cliente WHERE cod = '$user' AND senha = '$senha'";
$result = mysqli_query($connect, $query);
$dado = mysqli_fetch_array($result);

if($dado['user'] == $user && $dado['senha'] == $senha){
    
    // $_SESSION['cod'] = $dado[0];
    // $_SESSION['nome'] = $dado[1];
    // $_SESSION['apelido'] = $dado[2];
    // $_SESSION['num'] = $dado[3];
    // $_SESSION['bairro'] = $dado[4];
    // $_SESSION['data'] = $dado[6];
    
    header('location: ./perfil.php');
   

}elseif ($dado[0] != $user && $dado[5] != $senha) {
    echo $dado;
}{
}
?>