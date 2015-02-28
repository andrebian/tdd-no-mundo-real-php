<?php

namespace CDC\Loja\Persistencia;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Persistencia\ProdutoDao,
    CDC\Loja\Produto\Produto;
use Mockery;
use PDO;

/**
 * @group Loja
 */
class ProdutoDaoTest extends TestCase
{

    private $conexao;

    protected function setUp()
    {
        parent::setUp();
        $this->conexao = new PDO("sqlite:test.db");
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->criaTabela();
    }

    protected function tearDown()
    {
        parent::tearDown();
		$this->conexao = null;
        unlink("test.db");
    }

    protected function criaTabela()
    {
        $sqlString = "CREATE TABLE IF NOT EXISTS produto ";
        $sqlString .= "(id INTEGER PRIMARY KEY, descricao TEXT, ";
        $sqlString .= "valor_unitario TEXT, status TINYINT(1) );";
        $this->conexao->query($sqlString);
    }

    /**
     * @covers CDC\Loja\Persistencia\ProdutoDao::adiciona()
     */
    public function testDeveAdicionarUmProduto()
    {
        $produtoDao = new ProdutoDao($this->conexao);
        $produto = new Produto("Geladeira", 150.0, 1);

        // Sobrescrevendo a conexão para continuar trabalhando
        // sobre a mesma já instanciada
        $conexao = $produtoDao->adiciona($produto);

        // buscando pelo id para
        // ver se está igual o produto do cenário
        $salvo = $produtoDao->porId($conexao->lastInsertId());

        $this->assertEquals($salvo["descricao"], $produto->getNome());
        $this->assertEquals($salvo["valor_unitario"], $produto->getValorUnitario());
        $this->assertEquals($salvo["status"], $produto->getStatus());
    }

    /**
     * @covers CDC\Loja\Persistencia\ProdutoDao::ativos()
     */
    public function testDeveFiltrarAtivos()
    {
        $produtoDao = new ProdutoDao($this->conexao);
        $ativo = new Produto("Geladeira", 150.0, 1);
        $inativo = new Produto("Geladeira", 180.0, 1, false);
        $inativo->inativa();
        $produtoDao->adiciona($ativo);
        $produtoDao->adiciona($inativo);
        $produtosAtivos = $produtoDao->ativos();

        $this->assertEquals(1, count($produtosAtivos));
        $this->assertEquals(150.0, $produtosAtivos[0]["valor_unitario"]);
    }
    
    /**
     * @covers CDC\Loja\Persistencia\ProdutoDao::porId()
     */
    public function testPorId()
    {
        $conexao = Mockery::mock('PDO');
        $conexao->shouldReceive('query')->andReturn($conexao);
        $conexao->shouldReceive('fetch')->andReturn(array('id' => 1));
       
        $produtoDao = new ProdutoDao($conexao);
        $this->assertNotNull($produtoDao->porId(1));
        
    }

}
