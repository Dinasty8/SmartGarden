<?php
namespace App\Models\DB;

use App\Models\Usuario;

class UsuarioDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function login($email, $senha) {
        try {
            $sql = "SELECT * FROM cadastros WHERE email = ? AND senha = ?";
            
            $req = $this->pdo->prepare($sql);
            $req->execute([$email, $senha]);

            $resultado = $req->fetch(\PDO::FETCH_ASSOC);

            if (!empty($resultado)) {
                return new Usuario(
                    $resultado["nome"],
                    $resultado["email"],
                    $resultado["senha"]
                );
            }

        } catch (\Exception $e) {
            echo $ex->getMessage();
        }
        return null;
    }

    public function listarTudo() {
        try {
            $sql = "SELECT * FROM cadastros";
            
            $req = $this->pdo->prepare($sql);
            $req->execute();

            return $req->fetchAll(\PDO::FETCH_OBJ);

        } catch (\Exception $e) {
            echo $ex->getMessage();
        }
        return null;
    }
}