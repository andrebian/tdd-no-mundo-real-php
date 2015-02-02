<?php

namespace CDC\Loja\Produto;

class Produto
{
    private$nome;
    private $valorUnitario;
    private $quantidade;
    private $status = true;

    /**
     * @codeCoverageIgnore
     * @param type $nome
     * @param type $valorUnitario
     * @param type $quantidade
     */
    public function __construct($nome, $valorUnitario, $quantidade)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
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
    
    public function inativa()
    {
        $this->status = false;

    }

}
