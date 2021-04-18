<?php
session_start();
include_once ("../conexao.php");

$lote = $_POST["nome_lote"] ?? null;
$area_irrig = $_POST["area_irrigacao_m3"] ?? null;
$area_plantio = $_POST["area_plantio"] ?? null;
$qtd_irrig = $_POST["qtd_irrigadores"] ?? null;
$hr_irrig = $_POST["hr_irrigacao"] ?? null;



$result_usuario = "INSERT INTO lotes (nome_lote,area_irrigacao_m3,select_area_plantio,qtd_irrigadores,hr_irrigacao,created) VALUES ('$lote','$area_irrig','$area_plantio','$qtd_irrig','$hr_irrig',NOW())";
$resultado_usuario = mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado com Sucesso!</p>";
    header("Location:index.php");
}else{
    $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado com Sucesso!</p>";
    header("Location:index.php");}