<?php

namespace CDC\Loja\Produto;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Produto\Produto,
    CDC\Loja\Produto\MaiorEMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

/**
 * @group Loja
 */
class MaiorEMenorTest extends PHPUnit
{

    /**
     * @covers CDC\Loja\Produto\MaiorEMenor::encontra()
     */
    public function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(
                new Produto("Geladeira", 450.00, 1));
        $carrinho->adiciona(
                new Produto("Liquidificador", 250.00, 1));
        $carrinho->adiciona(
                new Produto("Jogo de pratos", 70.00, 1));
        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Jogo de pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

    /**
     * @covers CDC\Loja\Produto\MaiorEMenor::encontra()
     */
    public function testApenasUmProduto()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 450.00, 1));
        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);
        $this->assertEquals("Geladeira", $maiorEMenor->getMenor()->getNome());
    }
    
    /**
     * @covers CDC\Loja\Produto\MaiorEMenor::getMaior()
     * @covers CDC\Loja\Produto\MaiorEMenor::getMenor()
     */
    public function testGetMaiorEGetMenor()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(
                new Produto("Geladeira", 450.00, 1));
        $carrinho->adiciona(
                new Produto("Liquidificador", 250.00, 1));
        $carrinho->adiciona(
                new Produto("Jogo de pratos", 70.00, 1));
        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Jogo de pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

}
