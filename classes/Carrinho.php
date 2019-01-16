<?php

class Carrinho
{
    public $itens = [];

    public function __construct($itensX)
    {
        $this->itens = $itensX;
    }

    public function listarItens()
    {
        return $this->itens;
    }

    public function total()
    {
        $resultado = 0;
        foreach($this->itens as $item) {
            $resultado += $item->subtotal();
        }

        return $resultado;
    }
}