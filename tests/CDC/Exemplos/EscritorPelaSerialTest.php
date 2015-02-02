<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase;

/**
 * @group Exemplos
 */
class EscritorPelaSerialTest extends TestCase
{

    private $className = 'CDC\Exemplos\EscritorPelaSerial';
    private $class;
    
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
    
    /**
     * @covers CDC\Exemplos\EscritorPelaSerial::escreve()
     */
    public function testEscreve()
    {
        $caracteres = array('a', 'n', 'd', 'r', 'e');
        
        foreach ($caracteres as $chr) {
            $result = $this->class->escreve($chr);
        }
        $this->assertEquals('andre', $result);
    }

}
