<?php

namespace CDC\Exemplos;

class ConversorDeNumeroRomano
{

    public function converte($numeroEmRomano)
    {
        if ($numeroEmRomano === "V") {
            return 5;
        }
        return 1;
    }

}
