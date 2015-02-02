<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
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
    
    /**
     * @covers CDC\Loja\Produto\Produto::getQuantidade()
     */
    public function testGetQuantidade()
    {
        $this->assertInternalType('int', $this->class->getQuantidade());
        $this->assertEquals(1, $this->class->getQuantidade());
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getNome()
     */
    public function testGetNome()
    {
        $this->assertNotNull($this->class->getNome());
        $this->assertInternalType('string', $this->class->getNome());
        $this->assertEquals('Geladeira', $this->class->getNome());
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getValorUnitario()
     */
    public function testGetValorUnitario()
    {
        $this->assertNotNull($this->class->getValorUnitario());
        $this->assertInternalType('float', $this->class->getValorUnitario());
        $this->assertEquals(799.0, $this->class->getValorUnitario(), null, 0.0001);
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getValorTotal()
     */
    public function testGetValorTotal()
    {
        $produto = new $this->className('Geladeira', 500.0, 2);
        $this->assertNotNull($produto->getValorTotal());
        $this->assertInternalType('float', $produto->getValorTotal());
        $this->assertEquals(1000.0, $produto->getValorTotal(), null, 0.0001);
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::inativa()
     * @covers CDC\Loja\Produto\Produto::getStatus()
     */
    public function testInativa()
    {
        $this->class->inativa();
        $this->assertFalse($this->class->getStatus());
    }

}
