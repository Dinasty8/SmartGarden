<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\Usuario;
use App\Models\DB\UsuarioDao;

class Autenticacao extends ControladorCore {
    
    public function entrar() {
        if ($this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

                $login = $_POST['usuario'];
                $senha = $_POST['senha'];

                $uDao = new UsuarioDao();
                $usuarioObj = $uDao->login($login, $senha);

                if (!empty($usuarioObj)) {
                    
                    //$usuarioObj = new Usuario($login, "u@s.com", $senha);

                    $this->logarUsuario($usuarioObj);

                    header("Location:".BASE_URL."/produtos");
                    return; // Cancela a execução do restante do método. Irá previnir que o header fora dos IFs seja executado.

                } else {
                    $_SESSION['erro'] = "Login incorreto";
                }
            } else {
                $_SESSION['erro'] = "Informe todos os campos obrigatórios";
            }
            header("Location:".BASE_URL);
        }
    }  
        public function cadastrar() {
            if (!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['senha'])) {

                $servidor = "localhost";
                $usuario = "root";
                $senha = "";
                $dbname = "projetfinal";

                $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);


                $lgn = $_POST["name"] ?? null;
                $email = $_POST["email"] ?? null;
                $pass = $_POST["senha"] ?? null;
                
                $sql = "INSERT INTO cadastros (nome,email,senha,created) VALUES ('$lgn','$email','$pass',NOW())";
                $req = mysqli_query($conn,$sql);
                header("Location:".BASE_URL);

            } 
            else {
                $_SESSION['erro'] = "Informe todos os campos obrigatórios";
            }  
        }
    

   

    public function logout() {
        if ($this->estaLogado()) {
            $this->deslogarUsuario();
        }
        header("Location:".BASE_URL);
    }
}
