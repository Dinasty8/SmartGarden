<?php
namespace App\Models\DB;

use App\Models\Usuario;

class UsuarioDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    // public function cadastro($login,$email, $senha) {
    //     try {
    //         $servidor = "localhost";
    //         $usuario = "root";
    //         $senha = "";
    //         $dbname = "projetfinal";
            
    //         //Criar Conexão
    //         $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

    //         $lgn = $_POST["name"] ?? null;
    //         $email = $_POST["email"] ?? null;
    //         $pass = $_POST["senha"] ?? null;

        
    //         $sql = "INSERT INTO cadastros (`nome`, `email`, `senha`, `created`) VALUES (?,?,?,?)";
          
    //         $req = $this->pdo->prepare($sql);
    //         $req->bind_param([$lgn,$email, $senha,Now()]);

    //          if( $req->execute() == TRUE){
    //             return true ;
    //         }else{
    //             return false;
    //         }

    //     } catch (\Exception $e) {
    //         echo $ex->getMessage();
    //     }
    //     return null;
    // }


    
    public function login($login, $senha) {
        try {
            $sql = "SELECT * FROM cadastros WHERE nome = ? AND senha = ?";
            
            $req = $this->pdo->prepare($sql);
            $req->execute([$login, $senha]);

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