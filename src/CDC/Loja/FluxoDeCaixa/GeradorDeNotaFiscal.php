<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\FluxoDeCaixa\Pedido;
use DateTime;

class GeradorDeNotaFiscal
{

    private $dao;

    public function __construct(NFDao $dao)
    {
        $this->dao = $dao;
    }

    public function gera(Pedido $pedido)
    {
        $nf = new NotaFiscal(
                $pedido->getCliente(), $pedido->getValorTotal() * 0.94, new DateTime()
        );
        if ($this->dao->persiste($nf)) {
            return $nf;
        }
        return null;
    }

}
