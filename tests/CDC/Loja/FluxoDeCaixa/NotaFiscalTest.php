<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

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
    
    public function testGetCliente()
    {
        $this->assertInternalType('string', $this->class->getCliente());
        $this->assertEquals('Cliente', $this->class->getCliente());
    }
    
    public function testGetData()
    {
        $this->assertInstanceOf('DateTime', $this->class->getData());
    }

}
