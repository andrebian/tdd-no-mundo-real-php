<?php

namespace CDC\Loja\Produto;

class Produto
{
    private$nome;
    private $valorUnitario;
    private $quantidade;
    private $status;

    public function __construct($nome, $valorUnitario, $quantidade, $status = true)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
        $this->status = $status;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getValorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

}
