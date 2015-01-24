<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario
{

    public function calculaSalario(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() === "desenvolvedor") {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        } else if ($funcionario->getCargo() === "dba") {


            if ($funcionario->getSalario() < 2500.0) {
                return $funcionario->getSalario() * 0.85;
            }
            return $funcionario->getSalario() * 0.75;
        }

        throw new \Exception("Tipo de funcionário inválido");
    }

}
