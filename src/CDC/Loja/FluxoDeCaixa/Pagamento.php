<?php

namespace CDC\Loja\FluxoDeCaixa;

class Pagamento
{

    private $valor;
    private $meioPagamento;

    /**
     * @codeCoverageIgnore
     * @param type $valor
     * @param type $meioPagamento
     */
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
