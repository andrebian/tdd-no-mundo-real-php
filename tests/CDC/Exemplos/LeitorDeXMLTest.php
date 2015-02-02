<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase;

/**
 * @group Exemplos
 */
class LeitorDeXMLTest extends TestCase
{
    
    private $className = 'CDC\Exemplos\LeitorDeXML';
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
     * @covers CDC\Exemplos\LeitorDeXML::temCaracteres()
     * @covers CDC\Exemplos\LeitorDeXML::leCaracteres()
     */
    public function testTemCaracteres()
    {
        $result = $this->class->leCaracteres();
                
        while($this->class->temCaracteres()) {
            $result .= $this->class->leCaracteres();
        }
        
        $this->assertNotNull($result);
        $this->assertInternalType('string', $result);
    }

}
