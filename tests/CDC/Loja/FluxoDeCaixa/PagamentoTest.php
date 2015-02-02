<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class PagamentoTest extends TestCase
{
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Pagamento::getValor()
     */
    public function testGetValor()
    {
        $pagamento = new Pagamento(550.0, MeioPagamento::BOLETO);
        $this->assertNotNull($pagamento->getValor());
        $this->assertInternalType('float', $pagamento->getValor());
    }
}
