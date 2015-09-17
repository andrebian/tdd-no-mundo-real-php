<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;

class MaiorEMenor 
{
	private $menor;
	private $maior;

	public function encontra( CarrinhoDeCompras $carrinho ) {

		foreach( $carrinho->getProdutos() as $produto ) {

			if ( empty($this->menor) || $produto->getValor() < $this->menor->getValor() )
				$this->menor = $produto;

			if ( empty($this->maior) || $produto->getValor() > $this->maior->getValor() )
				$this->maior = $produto;
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

