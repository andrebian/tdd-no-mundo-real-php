<?php

namespace CDC\Loja\FluxoDeCaixa;

/**
 * @codeCoverageIgnore
 */
class Boleto
{

    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

}
