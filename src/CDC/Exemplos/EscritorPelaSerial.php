<?php

namespace CDC\Exemplos;

class EscritorPelaSerial
{
    private $socketContent = '';
    
    public function escreve($caracter)
    {
        $this->socketContent .= $caracter;
        return $this->socketContent;
    }
}
