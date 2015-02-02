<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\CalculadoraDeSalario,
    CDC\Loja\RH\Funcionario,
    CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class CalculadoraDeSalarioTest extends TestCase
{

    /**
     * @covers CDC\Loja\RH\CalculadoraDeSalario::calculaSalario()
     */
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
                "Andre", 1500.0, "desenvolvedor");

        $salario = $calculadora->calculaSalario($desenvolvedor);
        $this->assertEquals(1500.0 * 0.9, $salario, null, 0.00001);
    }

    /**
     * @covers CDC\Loja\RH\CalculadoraDeSalario::calculaSalario()
     */
    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
                "Andre", 4000.0, "desenvolvedor");

        $salario = $calculadora->calculaSalario($desenvolvedor);
        $this->assertEquals(4000.0 * 0.8, $salario, null, 0.00001);
    }

    /**
     * @covers CDC\Loja\RH\CalculadoraDeSalario::calculaSalario()
     */
    public function testDeveCalcularSalarioParaDBAsComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $dba = new Funcionario("Mauricio", 1500.00, "dba");
        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(1500.00 * 0.85, $salario, null, 0.00001);
    }

    /**
     * @covers CDC\Loja\RH\CalculadoraDeSalario::calculaSalario()
     */
    public function testDeveCalcularSalarioParaDBAsComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $dba = new Funcionario("Mauricio", 4500.00, "dba");
        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(4500.00 * 0.75, $salario, null, 0.00001);
    }

}
