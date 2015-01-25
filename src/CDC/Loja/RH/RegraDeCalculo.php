<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

interface RegraDeCalculo
{
    public function calcula(Funcionario $funcionario);
}
