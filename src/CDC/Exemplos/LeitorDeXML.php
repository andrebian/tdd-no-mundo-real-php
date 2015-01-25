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
        if( isset($this->stringDeTesteSomente[$this->contador]) ) {
            return $this->stringDeTesteSomente[$this->contador];
        }
        
        return null;
    }

    public function temCaracteres()
    {
        if( strlen($this->stringDeTesteSomente) > $this->contador  ) {
            $this->contador++;
            return true;
        }
        
        $this->contador = 0;
        return false;
    }

}
