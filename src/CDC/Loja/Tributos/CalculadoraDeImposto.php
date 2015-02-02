<?php

namespace CDC\Loja\Tributos;

use CDC\Loja\FluxoDeCaixa\Pedido,
    CDC\Loja\Tributos\Tabela;

class CalculadoraDeImposto
{

    protected $tabela;

    /**
     * @codeCoverageIgnore
     * @param Tabela $tabela
     */
    public function __construct(Tabela $tabela)
    {
        $this->tabela = $tabela;
    }

    public function calculaImposto(Pedido $pedido)
    {
        $taxa = $this->tabela->paraValor(
                $pedido->getValorTotal());
        return $pedido->getValorTotal() * $taxa;
    }

}
