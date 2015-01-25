<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

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

    public function testSetPagoEIsPago()
    {
        $this->class->setPago(true);
        $this->assertTrue($this->class->isPago());
    }
    
    public function testGetValor()
    {
        $class = new $this->className('Cliente', 299.0);
        $this->assertInternalType('float', $class->getValor());
        $this->assertEquals(299.0, $class->getValor());
    }

}
