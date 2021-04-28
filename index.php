<?php
session_start();

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

require_once "vendor/autoload.php";

/* Inclui o arquivo com as constantes que poderão ser acessadas em 
toda a aplicação */
require_once dirname(__FILE__)."/app/config/constantes.php";

/* Carrega o arquivo de rotas */
require_once dirname(__FILE__)."/app/config/rotas.php";

/* Classe que intercepta a requisição e encaminha para o controlador 
adequado */
use App\Init;

/* A variável $rotas está no arquivo app/config/rotas.php 
chamado via require_once */
new Init($rotas);