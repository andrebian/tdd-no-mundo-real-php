<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class QuinzeOuVinteECincoPorCentoTest extends TestCase
{

    public $className = 'CDC\Loja\RH\QuinzeOuVinteECincoPorCento';
    public $class;
    
    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className();
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }
    
    public function testCalcula()
    {
        $salario = $this->class->calcula(new Funcionario('Andre', 2000.0, 'desenvolvedor'));
        $this->assertEquals((2000 * 0.85), $salario, null, 0.0001);
        
        $salario = $this->class->calcula(new Funcionario('Andre', 3200.0, 'desenvolvedor'));
        $this->assertEquals((3200 * 0.75), $salario, null, 0.0001);
    }

}
