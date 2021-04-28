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

    public function logout() {
        if ($this->estaLogado()) {
            $this->deslogarUsuario();
        }
        header("Location:".BASE_URL);
    }
}
