<?php

class Produto{
    private $nome;
    private $valor;
    private $quantidade;
    private $validade;

    public function __construct($nome, $valor, $quantidade, $validade){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->validade = $validade;
    }

    public function salvar(){
        if(!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome' => $this->nome,
            'valor' => $this->valor,
            'quantidade' => $this->quantidade,
            'validade' => $this->validade
        ];
    }

    public static function listar(){
        return $_SESSION['produtos'] ?? [];

    }
}