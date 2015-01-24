<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario
{

    public function calculaSalario(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() === "desenvolvedor") {
            return $this->dezOuVintePorCentoDeDesconto(
                            $funcionario);
        } else if ($funcionario->getCargo() === "dba" ||
                $funcionario->getCargo() === "testador") {
            return $this->quinzeOuVinteECincoPorCentoDeDesconto($funcionario);
        }
        throw new \Exception("Tipo de funcionário inválido");
    }

    private function dezOuVintePorCentoDeDesconto(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }
        return $funcionario->getSalario() * 0.9;
    }

    private function quinzeOuVinteECincoPorCentoDeDesconto(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() < 2500) {
            return $funcionario->getSalario() * 0.85;
        }
        return $funcionario->getSalario() * 0.75;
    }

}
