<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\RegraDeCalculo;

class DezOuVintePorCento extends RegraDeCalculo
{

    protected function porcentagemBase()
    {
        return 0.9;
    }

    protected function porcentagemAcimaDoLimite()
    {
        return 0.8;
    }

    protected function limite()
    {
        return 3000;
    }

}
