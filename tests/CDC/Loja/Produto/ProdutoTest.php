<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Test\TestCase;

class ProdutoTest extends TestCase
{
    private $className = 'CDC\Loja\Produto\Produto';
    private $class;

    protected function setUp()
    {
        parent::setUp();
        $this ->class = new $this->className('Geladeira', 799.0, 1);
    }

    protected function tearDown()
    {
        parent::tearDown();
    }
    
    public function testGetQuantidade()
    {
        $this->assertInternalType('int', $this->class->getQuantidade());
        $this->assertEquals(1, $this->class->getQuantidade());
    }

}
