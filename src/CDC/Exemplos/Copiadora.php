<?php

namespace CDC\Exemplos;

use CDC\Exemplos\EscritorPelaSerial,
        CDC\Exemplos\LeitorDeXML;

class Copiadora
{

    private $leitor;
    private $escritor;
    
    
    /**
     * @codeCoverageIgnore
     * 
     * @param LeitorDeXML $leitor
     * @param EscritorPelaSerial $escritor
     */
    public function __construct(LeitorDeXML $leitor,  EscritorPelaSerial $escritor)
    {
        $this->leitor = $leitor;
        $this->escritor = $escritor;
    }

    public function copiar()
    {
        while ($this->leitor->temCaracteres()) {
            $this->escritor->escreve($this->leitor->leCaracteres());
        }
    }

}
