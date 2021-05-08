<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\DB\UsuarioDao;

class Paginas extends ControladorCore {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->estaLogado()) {
            header("Location:".BASE_URL."/irrigacao");

        } else {
            $this->addTituloPagina("Smart Garden");
            $this->carregarPagina("home");
        }
    }

    public function forgot() {
       
        $this->addTituloPagina("Recuperar Senha");
       $this->carregarPagina("forgot");
       
    }

    public function irrigacao() {
        if (!$this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            $this->addTituloPagina("Irrigação");
            
            $this->addDadosPagina(
                "produtos",
                array("Monitor", "Placa mãe", "Memória RAM")
            );

            $this->carregarPagina("irrigacao");
        }
    }
    
    public function sobre() {
        if (!$this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
        //echo __CLASS__." - ".__FUNCTION__;
        $usuarios = (new UsuarioDao())->listarTudo();
        print_r($usuarios);
        }
    }

    public function erro404() {
        $this->addTituloPagina("Página não encontrada");
        $this->carregarPagina("erro404");
    }
}
