<?php
session_start();
include_once ("conexao.php");

$lgn = $_POST["name"] ?? null;
$email = $_POST["email"] ?? null;
$pass = $_POST["senha"] ?? null;
$confpass = $_POST["confirmsenha"] ?? null;
$nascm = $_POST["nascimento"] ?? null;

// echo "Nome: $lgn<br>";
// echo "Email: $email<br>";
// echo "Senha :$pass<br>";
// echo "Senha Confirmada :$confpass<br>";
// echo "Data Nascimento :$nascm<br>";

$result_usuario = "INSERT INTO cadastros (nome,email,senha,created) VALUES ('$lgn','$email','$pass',NOW())";
$resultado_usuario = mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado com Sucesso!</p>";
    header("Location:index.php");
}else{
    $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado com Sucesso!</p>";
    header("Location:index.php");}