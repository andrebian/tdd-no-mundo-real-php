<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

class FuncionarioTest extends TestCase
{

    private $className = 'CDC\Loja\RH\Funcionario';
    private $class;
    
    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className('Andre', 1000.0, 'desenvolvedor');
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }
    
    public function testGetNome()
    {
        $this->assertNotNull($this->class->getNome());
        $this->assertInternalType('string', $this->class->getNome());
        $this->assertEquals('Andre', $this->class->getNome());
    }

}
