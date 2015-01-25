<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

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

}
