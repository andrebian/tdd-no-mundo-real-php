<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Produto\Produto,
    CDC\Loja\Test\Builder\CarrinhoDeComprasBuilder;

/**
 * @group Loja
 */
class CarrinhoDeComprasTest extends TestCase
{

    private $carrinho;

    protected function setUp()
    {
        $this->carrinho = new CarrinhoDeCompras();
        parent::setUp();
    }
    
    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::adiciona()
     */
    public function testAdiciona()
    {
        $result = $this->carrinho->adiciona(new Produto('Teste', 250.0, 1));
        $this->assertNotNull($result);
        $this->assertInstanceOf('CDC\Loja\Carrinho\CarrinhoDeCompras', $result);
    }
    
    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::getProdutos()
     */
    public function testGetProdutos()
    {
        $this->carrinho->adiciona(new Produto('Teste', 250.0, 1));
        $this->carrinho->adiciona(new Produto('Teste 2', 350.0, 1));
        
        $this->assertNotEmpty($this->carrinho->getProdutos());
        $this->assertInstanceOf('ArrayObject', $this->carrinho->getProdutos());
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::maiorValor()
     */
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $valor = $this->carrinho->maiorValor();

        $this->assertEquals(0, $valor, null, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::maiorValor()
     */
    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        $valor = $this->carrinho->maiorValor();

        $this->assertEquals(900.00, $valor, null, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::maiorValor()
     */
    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        $this->carrinho->adiciona(new Produto("Fogão", 1500.00, 1));
        $this->carrinho->adiciona(
                new Produto("Máquina de lavar", 750.00, 1));
        $valor = $this->carrinho->maiorValor();
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::maiorValor()
     */
    public function testParaMostrarOUsoDoTestDataBuilder()
    {
        $carrinho = (new CarrinhoDeComprasBuilder())->comItens(300.0, 700.0, 200.0, 500.0)->cria();

        $maiorValor = $carrinho->maiorValor();
        $this->assertEquals(700.0, $maiorValor, null, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::getProdutos()
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::adiciona()
     */
    public function testDeveAdicionarItens()
    {
        //garante que o carrinho está vazio
        $this->assertEmpty($this->carrinho->getProdutos());

        $produto = new Produto("Geladeira", 900.0, 1);
        $this->carrinho->adiciona($produto);
        $esperado = count($this->carrinho->getProdutos());
        $this->assertEquals(1, $esperado);
        $this->assertEquals($produto, $this->carrinho->getProdutos()[0]);
    }

    /**
     * @covers CDC\Loja\Carrinho\CarrinhoDeCompras::getProdutos()
     */
    public function testListaDeProdutos()
    {
        $lista = (new CarrinhoDeCompras())
                ->adiciona(new Produto("Jogo de jantar", 200.00, 1))
                ->adiciona(new Produto("Jogo de pratos", 100.00, 1));
        $this->assertEquals(2, count($lista->getProdutos()));
        $this->assertEquals(200.0, $lista->getProdutos()[0]->getValorUnitario());

        $this->assertEquals(100.0, $lista->getProdutos()[1]->getValorUnitario());
        // asserts nos outros atributos, como quantidade,
        // etc, nos objetos dessa lista
    }

}
