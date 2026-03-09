<?php

session_start();
require_once "./Model/LivroModel.php";

class LivroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $editora = $_POST['editora'];

        $livro = new Livro($titulo, $autor, $ano_publicacao, $editora);
        $livro->salvar();
        header('Location: PB_PHP/situacao_de_aprendizagem_01/livro/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $livros = Livro::listar();
        echo"<pre>";
        print_r($livros);
        echo"</pre>";
        require "View/livroListar.php";
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require "View/livroEditar.php";
    }

    public function atualizar(){
        $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['ano_publicacao'], $_POST['editora']);
        $livro->atualizar($_GET['id']);
        header('Location: PB_PHP/situacao_de_aprendizagem_01/livro/telaEditar'.($_GET['id']));
        exit;
    }

    public function excluir(){
        Usiario::excluir($_GET['id']);
        header('Location: PB_PHP/situacao_de_aprendizagem_01/livro/listar');
        exit;
    }
}