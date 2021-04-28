<?php
namespace App\Config;

use PDO;
use App\Models\DB\ConfigDB;

function getConexaoDB(): PDO {
    $config = ConfigDB::getInstancia("localhost", "projetfinal", "root", "");
    return $config->getConexao();
}