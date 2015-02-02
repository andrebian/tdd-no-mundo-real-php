<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class NotaFiscalTest extends TestCase
{

    private $className = 'CDC\Loja\FluxoDeCaixa\NotaFiscal';
    private $class;

    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className('Cliente', 550.0, new \DateTime());
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\NotaFiscal::getCliente()
     */
    public function testGetCliente()
    {
        $this->assertInternalType('string', $this->class->getCliente());
        $this->assertEquals('Cliente', $this->class->getCliente());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\NotaFiscal::getData()
     */
    public function testGetData()
    {
        $this->assertInstanceOf('DateTime', $this->class->getData());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\NotaFiscal::getValor()
     */
    public function testGetValor()
    {
        $this->assertNotNull($this->class->getValor());
        $this->assertInternalType('float', $this->class->getValor());
    }

}
