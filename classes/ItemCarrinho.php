<?php

class ItemCarrinho
{
    public $quantidade;
    public $produto;

    public function __construct($quantidadeX, $produtoX)
    {
        $this->quantidade = $quantidadeX;
        $this->produto = $produtoX;
    }

    public function subtotal()
    {
        return $this->produto->valor * $this->quantidade;
    }
}