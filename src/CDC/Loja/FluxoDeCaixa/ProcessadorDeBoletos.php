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
        $boleto = current($boletos);

        $pagamento = new Pagamento($boleto->getValor(),
        MeioPagamento::BOLETO);
        $pagamentosFatura = $fatura->getPagamentos();
        $pagamentosFatura->append($pagamento);
    }
}
