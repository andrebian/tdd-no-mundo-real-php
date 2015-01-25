<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Cargo,
    CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario
{

    public function calculaSalario(Funcionario $funcionario)
    {
        $cargo = new Cargo($funcionario->getCargo());

        return $cargo->getRegra()->calcula($funcionario);
    }

}
