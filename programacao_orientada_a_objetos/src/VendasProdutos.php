<?php

declare(strict_types=1);


class Vendas
{
    private string $nomeDoProduto;
    private string $descricao;
    private int $categoria;
    private float $valor;

    public function __construct(
        string $nomeDoProduto, 
        string $descricao, 
        int $categoria, 
        float $valor
        ) {
            $this-> nomeDoProduto = $nomeDoProduto; 
            $this-> descricao =  $descricao;
            $this-> categoria = $categoria;
            $this-> valor = $valor;
    }

    public function precoProduto(): string
    {
        return "O item está em promoção por R$: " . $this -> valor;

    }
}

$produto1 = new Vendas(
    'Detergente',
    'marca bom bril',
    1,
    12.00
);

$produto2 = new Vendas(
    'Sabão',
    'marca bom bril',
    1,
    10.00
);

var_dump($produto1->precoProduto());


