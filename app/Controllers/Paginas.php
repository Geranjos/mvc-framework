<?php

class Paginas extends Controller {

    public function index(){
        $dados = [
            'tituloPagina' => 'Pagina Inicial',
            'descricao' => 'Curso PhP'
        ];

        $this->view('paginas/home',$dados);

    }

    public function sobre(){
        $dados = [
            'tituloPagina' => 'Pagina Sobre',
            'descricao' => 'Curso PhP'
        ];

        $this->view('paginas/sobre',$dados);


    }
}