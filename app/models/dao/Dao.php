<?php
namespace App\Models\DB;

use PDO;
use function App\Config\getConexaoDB;

abstract class Dao {

    protected PDO $pdo;

    public function __construct() {
        $this->pdo = getConexaoDB();
    }

    public abstract function listarTudo();
}