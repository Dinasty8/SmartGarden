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
            header("Location:".BASE_URL."/produtos");

        } else {
            $this->addTituloPagina("Página Inicial");
            $this->carregarPagina("home");
        }
    }

    public function produtos() {
        if (!$this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            $this->addTituloPagina("Listar Produtos");
            
            $this->addDadosPagina(
                "produtos",
                array("Monitor", "Placa mãe", "Memória RAM")
            );

            $this->carregarPagina("produtos");
        }
    }
    
    public function sobre() {
        //echo __CLASS__." - ".__FUNCTION__;
        $usuarios = (new UsuarioDao())->listarTudo();
        var_dump($usuarios);
    }

    public function opa() {
        $this->addTituloPagina("Opa");
       $this->carregarPagina("opa");
       
    }

    public function erro404() {
        $this->addTituloPagina("Página não encontrada");
        $this->carregarPagina("erro404");
    }
}
