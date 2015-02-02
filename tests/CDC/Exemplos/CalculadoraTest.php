<?php

namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase,
    CDC\Exemplos\Calculadora;

/**
 * @group Exemplos
 * @group Calculadora
 */
class CalculadoraTest extends TestCase
{

    /**
     * @covers CDC\Exemplos\Calculadora::soma()
     */
    public function testDeveSomarDoisNumerosPositivos()
    {
        $this->assertEquals(4, (new Calculadora())->soma(2, 2));
    }

    /**
     * @covers CDC\Exemplos\Calculadora::soma()
     */
    public function testDeveSomarPositivoComNegativo()
    {
        $this->assertEquals(4, (new Calculadora())->soma(6, -2));
    }

    /**
     * @covers CDC\Exemplos\Calculadora::soma()
     */
    public function testDeveSomarNegativoComPositivo()
    {
        $this->assertEquals(-4, (new Calculadora())->soma(-6, 2));
    }

    /**
     * @covers CDC\Exemplos\Calculadora::soma()
     */
    public function testDeveSomarDoisNumerosNegativos()
    {
        $this->assertEquals(-4, (new Calculadora())->soma(-2, -2));
    }

    /**
     * @covers CDC\Exemplos\Calculadora::soma()
     */
    public function testDeveSomarComZero()
    {
        $this->assertEquals(4, (new Calculadora())->soma(4, 0));
        $this->assertEquals(4, (new Calculadora())->soma(0, 4));
    }

}
