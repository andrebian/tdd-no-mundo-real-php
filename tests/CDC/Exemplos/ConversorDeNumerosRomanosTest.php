<?php

namespace CDC\Exemplos;

require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{

    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function testeDeveEntenderOSimboloV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("V");
        $this->assertEquals(5, $numero);
    }

}
