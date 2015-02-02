<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase,
        CDC\Exemplos\RelogioDoSistema;

/**
 * @group Exemplos
 */
class ReolgioDoSistemaTest extends TestCase
{
    
    /**
     * @covers CDC\Exemplos\RelogioDoSistema::hoje()
     */
    public function testHoje()
    {
        $hoje = new \DateTime();
        
        $relogio = new RelogioDoSistema();
        
        $this->assertEquals($hoje, $relogio->hoje());
    }
}
