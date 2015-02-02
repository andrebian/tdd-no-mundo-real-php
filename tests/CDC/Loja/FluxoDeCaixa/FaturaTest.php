<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class FaturaTest extends TestCase
{

    private $className = 'CDC\Loja\FluxoDeCaixa\Fatura';
    private $class;
    
    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className('Cliente', 500.0);
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }

    /**
     * @covers CDC\Loja\FluxoDeCaixa\Fatura::setPago()
     * @covers CDC\Loja\FluxoDeCaixa\Fatura::isPago()
     */
    public function testSetPagoEIsPago()
    {
        $this->class->setPago(true);
        $this->assertTrue($this->class->isPago());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Fatura::getValor()
     */
    public function testGetValor()
    {
        $class = new $this->className('Cliente', 299.0);
        $this->assertInternalType('float', $class->getValor());
        $this->assertEquals(299.0, $class->getValor());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Fatura::getPagamentos()
     */
    public function testGetPagamentos()
    {
        $pagamento = new Pagamento(500.0, MeioPagamento::BOLETO);
        $this->class->adicionaPagamento($pagamento);
        
        $this->assertNotNull($this->class->getPagamentos());
        $this->assertEquals(1, count($this->class->getPagamentos()));
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Fatura::adicionaPagamento()
     */
    public function testAdicionaPagamento()
    {
        $pagamento1 = new Pagamento(250.0, MeioPagamento::BOLETO);
        $this->class->adicionaPagamento($pagamento1);
        
        $pagamento2 = new Pagamento(250.0, MeioPagamento::BOLETO);
        $this->class->adicionaPagamento($pagamento2);
        
        $this->assertNotNull($this->class->getPagamentos());
        $this->assertEquals(2, count($this->class->getPagamentos()));
    }

}
