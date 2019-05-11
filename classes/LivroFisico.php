<?php

class LivroFisico extends Produto
{
    private $quantidadePaginas;

    public function __construct(
        float $xPreco,
        string $xNome,
        string $xDescricao,
        int $xQuantidadePaginas
    ) {
        parent::__construct($xPreco, $xNome, $xDescricao);
        $this->quantidadePaginas = $xQuantidadePaginas;
    }
}