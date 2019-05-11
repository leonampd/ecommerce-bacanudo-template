<?php

class ItemCarrinho
{
    private $quantidade;
    private $produto;

    public function __construct(int $xQuantidade, Produto $xProduto)
    {
        $this->quantidade = $xQuantidade;
        $this->produto = $xProduto;
    }

    public function subtotal()
    {
        return $this->quantidade * $this->produto->getPreco();
    }
}