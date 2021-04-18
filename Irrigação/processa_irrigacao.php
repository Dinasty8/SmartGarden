<?php
session_start();
include_once ("../conexao.php");

$area_plantio = $_POST["area_plantio"] ?? null;
$endereco = $_POST["endereco"] ?? null;


$result_usuario = "INSERT INTO areas_de_plantio (nome_area,endereco,created) VALUES ('$area_plantio','$endereco',NOW())";
$resultado_usuario = mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado com Sucesso!</p>";
    header("Location:index.php");
}else{
    $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado com Sucesso!</p>";
    header("Location:index.php");}