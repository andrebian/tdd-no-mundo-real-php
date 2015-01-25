<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\FluxoDeCaixa\Pedido,
    CDC\Exemplos\RelogioInterface;
use DateTime;

class GeradorDeNotaFiscal
{

    private $acoes;
    private$relogio;


    public function __construct($acoes, RelogioInterface $relogio)
    {
        $this->acoes = $acoes;
        $this->relogio = $relogio;
    }

    public function gera(Pedido $pedido)
    {
        $nf = new NotaFiscal(
                $pedido->getCliente(), $pedido->getValorTotal() * 0.94, $this->relogio->hoje()
        );
        foreach ($this->acoes as $acao) {
            $acao->executa($nf);
        }

        return $nf;
    }

}
