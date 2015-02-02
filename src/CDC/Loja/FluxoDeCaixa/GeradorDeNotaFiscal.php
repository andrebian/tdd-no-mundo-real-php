<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\FluxoDeCaixa\Pedido,
    CDC\Exemplos\RelogioInterface,
    CDC\Loja\Tributos\TabelaInterface;

class GeradorDeNotaFiscal
{

    private $acoes;
    private $relogio;
    private $tabela;

    /**
     * @codeCoverageIgnore
     * @param type $acoes
     * @param RelogioInterface $relogio
     * @param TabelaInterface $tabela
     */
    public function __construct($acoes, RelogioInterface $relogio, TabelaInterface $tabela)
    {
        $this->acoes = $acoes;
        $this->relogio = $relogio;
        $this->tabela = $tabela;
    }

    public function gera(Pedido $pedido)
    {
        $valorTabela = $this->tabela->paraValor($pedido->getValorTotal());
        $valorTotal = $pedido->getValorTotal() - ($pedido->getValorTotal() * $valorTabela);
        
        $nf = new NotaFiscal(
                $pedido->getCliente(), $valorTotal, $this->relogio->hoje()
        );
        
        foreach ($this->acoes as $acao) {
            $acao->executa($nf);
        }
        return $nf;
    }

}
