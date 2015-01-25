<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CDC\Exemplos;

use CDC\Exemplos\Leitor;

class LeitorDeXML implements Leitor
{
    
    private $stringDeTesteSomente = 'exemplo';
    private $contador = 0;
    
    public function leCaracteres()
    {
        return $this->stringDeTesteSomente[$this->contador];
    }

    public function temCaracteres()
    {
        if( $this->contador >= strlen($this->stringDeTesteSomente) ) {
            $this->contador++;
            return true;
        }
        
        return false;
    }

}
