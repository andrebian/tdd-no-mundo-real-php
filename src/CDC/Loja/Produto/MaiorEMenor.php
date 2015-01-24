<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;

class MaiorEMenor
{

    private $menor;
    private $maior;

    public function encontra(CarrinhoDeCompras $carrinho)
    {
        foreach ($carrinho->getProdutos() as $produto) {

            if (empty($this->menor) || $produto->getValorUnitario() < $this->menor->getValorUnitario()) {
                $this->menor = $produto;
            }
            if (empty($this->maior) || $produto->getValorUnitario() > $this->maior->getValorUnitario()) {
                $this->maior = $produto;
            }
        }
    }

    public function getMenor()
    {        
        return $this->menor;
    }

    public function getMaior()
    {
        return $this->maior;
    }

}
