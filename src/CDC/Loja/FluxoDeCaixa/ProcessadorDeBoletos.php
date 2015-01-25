<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\FluxoDeCaixa\Fatura,
    CDC\Loja\FluxoDeCaixa\Pagamento,
    CDC\Loja\FluxoDeCaixa\MeioPagamento;
use ArrayObject;

class ProcessadorDeBoletos
{

    public function processa(ArrayObject $boletos, Fatura $fatura)
    {
        $pagamentosFatura = $fatura->getPagamentos();
        foreach ($boletos as $boleto) {
            $pagamento = new Pagamento($boleto->getValor(), MeioPagamento::BOLETO);
            $pagamentosFatura->append($pagamento);
        }
    }

}
