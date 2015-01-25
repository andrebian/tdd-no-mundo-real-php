<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

class PedidoTest extends TestCase
{

    private $className = 'CDC\Loja\FluxoDeCaixa\Pedido';
    private $class;
    
    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className('Cliente', 599.0, 3);
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }
    
    public function testGetQuantidadeItens()
    {
        $this->assertInternalType('int', $this->class->getQuantidadeItens());
        $this->assertEquals(3, $this->class->getQuantidadeItens());
    }

}
