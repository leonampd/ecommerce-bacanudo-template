<?php

class Carrinho
{
    private $itensCarrinho;

    public function __construct()
    {
        $this->itensCarrinho = [];
    }

    public function adicionarItem(ItemCarrinho $item)
    {
        $this->itensCarrinho[] = $item;
        // array_push($this->itensCarrinho, $item);
    }

    public function total()
    {
        $total = 0;
        foreach($this->itensCarrinho as $item) {
            $total = $total + $item->subtotal();
        }

        return $total;
    }
}