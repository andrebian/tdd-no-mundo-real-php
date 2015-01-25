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
        $conn = (new ConexaoComBancoDeDados())->getConexao();
        $produtoDao = new ProdutoDao($conn);
        $produto = new Produto("Geladeira", 150.0);
        $produtoDao->adiciona($produto);

        // como validar?
    }

}
