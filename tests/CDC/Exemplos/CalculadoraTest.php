<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase,
    CDC\Exemplos\Calculadora;

class CalculadoraTest extends TestCase
{

    public function testDeveSomarUmMaisUm()
    {
        $this->assertEquals(2, (new Calculadora())->soma(1, 1));
    }

    public function testDeveSomarUmMaisDois()
    {
        $this->assertEquals(3, (new Calculadora())->soma(1, 2));
    }

    public function testDeveSomarUmMaisTres()
    {
        $this->assertEquals(4, (new Calculadora())->soma(1, 3));
    }

}
