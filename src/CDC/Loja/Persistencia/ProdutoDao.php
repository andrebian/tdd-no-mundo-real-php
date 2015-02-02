<?php

namespace CDC\Loja\Persistencia;

use PDO;
use CDC\Loja\Produto\Produto;

class ProdutoDao
{

    private $conexao;

    /**
     * @codeCoverageIgnore
     * @param PDO $conexao
     */
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adiciona(Produto $produto)
    {
        $sqlString = "INSERT INTO `produto` ";
        $sqlString .= "(descricao,valor_unitario,status) ";
        $sqlString .= "VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sqlString);
        $nome = $produto->getNome();
        $stmt->bindParam(1, $nome);
        
        $valorUnitario = $produto->getValorUnitario();
        $stmt->bindParam(2, $valorUnitario);
        
        $status = $produto->getStatus();
        $stmt->bindParam(3, $status);

        $stmt->execute();
        return $this->conexao;
    }

    public function porId($id)
    {
        $sqlString = "SELECT * FROM `produto` WHERE id=" . $id;
        $consulta = $this->conexao->query($sqlString);


        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function ativos()
    {
        $sqlString = "SELECT * FROM `produto` WHERE status=1";
        $consulta = $this->conexao->query($sqlString);


        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

}
