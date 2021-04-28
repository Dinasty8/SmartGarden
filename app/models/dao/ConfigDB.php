<?php
namespace App\Models\DB;

use PDO;
use Exception;

class ConfigDB {

    private static ConfigDB $configDB;
    private PDO $conexao;

    private function __construct($host, $nomeBanco, $usuario, $senha) {
        try {
            $this->conexao = new PDO(
                "mysql:host=$host;dbname=$nomeBanco;charset=utf8",
                $usuario,
                $senha,
            );
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch(\Exception $e) {
            echo $ex->getMessage();
        }
    }

    public static function getInstancia($host, $nomeBanco, $usuario, $senha) {
        if (empty(self::$configDB)) {
            self::$configDB = new ConfigDB($host, $nomeBanco, $usuario, $senha);
        }

        return self::$configDB;
    }

    public function getConexao() {
        return $this->conexao;
    }
}