<?php 

namespace CDC\Loja\Produto;

class Produto 
{

	private $nome;
	private $valor;

	public function __construct( $nome, $valor )
	{
		$this->nome  = $nome;
		$this->valor = $valor;

	}

	public function getNome() {
		return $this->nome;
	}

	public function getValor() {
		return $this->valor;
	}
}
