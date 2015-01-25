<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\FluxoDeCaixa\NotaFiscal;

interface AcaoAposGerarNotaInterface
{
    public function executa(NotaFiscal $nf);
}
