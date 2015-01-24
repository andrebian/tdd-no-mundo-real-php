<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario
{

    public function calculaSalario(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR) {
            if ($funcionario->getSalario() > 3000) {
                return 3200.0;
            }
            return 1350.0;
        }
        return 425.0;
    }

}
