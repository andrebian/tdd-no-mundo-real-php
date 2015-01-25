<?php

namespace CDC\Exemplos;

class Copiadora
{

    public function copiar()
    {
        $leitorXML = new LeitorDeXML();
        $escritorSerial = new EscritorPelaSerial();

        while ($leitorXML->temCaracteres()) {
            $escritorSerial->escreve($leitorXML->leCaracteres());
        }
    }

}
