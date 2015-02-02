<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase;
use Mockery;

/**
 * @group Exemplos
 * @group Copiadora
 */
class CopiadoraTest extends TestCase
{

    /**
     * @covers CDC\Exemplos\Copiadora::copiar()
     */
    public function testDeveLerEEnviarOConteudoLido()
    {
        $leitor = Mockery::mock("CDC\Exemplos\LeitorDeXML");
        $leitor->shouldReceive("temCaracteres")
                ->andReturn(true, false);
        $leitor->shouldReceive("leCaracteres")->andReturn("andre");
        $escritor = Mockery::mock("CDC\Exemplos\EscritorPelaSerial");
        $escritor->shouldReceive("escreve")->andReturn("andre");

        $copiadora = new Copiadora($leitor, $escritor);
        $copiadora->copiar();
        $this->assertEquals("andre", $escritor->escreve("andre"));
    }

}
