<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class CargoTest extends TestCase
{

    private $className = 'CDC\Loja\RH\Cargo';
    private $class;
    
    protected function setUp()
    {
        parent::setUp();
        $this->class = new $this->className('desenvolvedor');
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->class);
    }
    
    /**
     * @expectedException Exception
     */
    public function testThrowException()
    {
        new $this->className('Programador HTML?');
    }
    
    /**
     * @covers CDC\Loja\RH\Cargo::getRegra()
     */
    public function testGetRegra()
    {
        $regraDesenvolvedor = new $this->className('desenvolvedor');
        $this->assertInstanceOf('CDC\Loja\RH\DezOuVintePorCento', $regraDesenvolvedor->getRegra());
        
        $regraDba = new $this->className('dba');
        $this->assertInstanceOf('CDC\Loja\RH\QuinzeOuVinteECincoPorCento', $regraDba->getRegra());
        
        $regraTestador = new $this->className('testador');
        $this->assertInstanceOf('CDC\Loja\RH\QuinzeOuVinteECincoPorCento', $regraTestador->getRegra());
    }

}
