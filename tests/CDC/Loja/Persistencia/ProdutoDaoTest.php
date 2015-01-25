<?php

namespace CDC\Loja\Persistencia;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Persistencia\ConexaoComBancoDeDados,
    CDC\Loja\Persistencia\ProdutoDao,
    CDC\Loja\Produto\Produto;

class ProdutoDaoTest extends TestCase
{

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
