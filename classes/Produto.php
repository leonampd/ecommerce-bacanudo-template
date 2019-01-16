<?php

class Produto
{
    public $nome;
    public $descricao;
    public $valor;

    public function __construct($nomeX, $descricaoX, $valorX)
    {
        $this->nome = $nomeX;
        $this->descricao = $descricaoX;
        $this->valor = $valorX;
    }
}