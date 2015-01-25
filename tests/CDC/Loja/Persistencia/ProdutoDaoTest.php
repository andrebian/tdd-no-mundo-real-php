<?php

namespace CDC\Loja\Persistencia;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Persistencia\ConexaoComBancoDeDados,
    CDC\Loja\Persistencia\ProdutoDao,
    CDC\Loja\Produto\Produto;

class ProdutoDaoTest extends TestCase
{

    private $conexao;

    protected function setUp()
    {
        parent::setUp();
        $this->conexao = new PDO("sqlite:/tmp/test.db");
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->criaTabela();
    }

    protected function tearDown()
    {
        parent::tearDown();
        unlink("/tmp/test.db");
    }

    protected function criaTabela()
    {
        $sqlString = "CREATE TABLE produto ";
        $sqlString .= "(id INTEGER PRIMARY KEY, descricao TEXT, ";
        $sqlString .= "valor_unitario TEXT, status TINYINT(1) );";
        $this->conexao->query($sqlString);
    }

    public function testDeveAdicionarUmProduto()
    {
        $conexao = (new ConexaoComBancoDeDados())->getConexao();
        $produtoDao = new ProdutoDao($conexao);
        $produto = new Produto("Geladeira", 150.0);

        // Sobrescrevendo a conexão para continuar trabalhando
        // sobre a mesma já instanciada
        $conexao = $produtoDao->adiciona($produto);

        // buscando pelo id para
        // ver se está igual o produto do cenário
        $salvo = $produtoDao->porId($conexao->lastInsertId());

        $this->assertEquals($salvo["descricao"], $produto->getDescricao());
        $this->assertEquals($salvo["valor_unitario"], $produto->getValorUnitario());
        $this->assertEquals($salvo["status"], $produto->getStatus());
    }

}
