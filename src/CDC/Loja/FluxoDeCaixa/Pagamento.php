<?php

namespace CDC\Loja\FluxoDeCaixa;

class Pagamento
{

    private $valor;
    private $meioPagamento;

    public function __construct($valor, $meioPagamento)
    {
        $this->valor = $valor;
        $this->meioPagamento = $meioPagamento;
    }

    public function getValor()
    {
        return $this->valor;
    }

}
