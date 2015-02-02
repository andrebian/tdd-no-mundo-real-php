<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase,
    CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal,
    CDC\Exemplos\RelogioDoSistema;
use Mockery;

/**
 * @group Loja
 */
class GeradorDeNotaFiscalTest extends TestCase
{

    /**
     * @covers CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal::gera()
     */
    public function testDeveGerarNFComValorDeImpostoDescontado()
    {
        $dao = Mockery::mock("CDC\Loja\FluxoDeCaixa\NFDao");
        $dao->shouldReceive("persiste")->andReturn(true);
        $sap = Mockery::mock("CDC\Loja\FluxoDeCaixa\SAP");
        $sap->shouldReceive("envia")->andReturn(true);
        $acao1 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao1->shouldReceive("executa")->andReturn(true);
        $acao2 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao2->shouldReceive("executa")->andReturn(true);

        $relogio = new RelogioDoSistema();
        $tabela = Mockery::mock("CDC\Loja\Tributos\TabelaInterface");
        $tabela->shouldReceive("paraValor")
                ->with(1000.0)->andReturn(0.06);
        $gerador = new GeradorDeNotaFiscal(array($acao1, $acao2), $relogio, $tabela);

        $pedido = new Pedido("Andre", 1000, 1);

        $nf = $gerador->gera($pedido);
        $this->assertEquals(1000 * 0.94, $nf->getValor(), null, 0.00001);
    }

    /**
     * @covers CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal::gera()
     */
    public function testDevePersistirNFGerada()
    {
        $dao = Mockery::mock("CDC\Loja\FluxoDeCaixa\NFDao");
        $dao->shouldReceive("persiste")->andReturn(true);
        $sap = Mockery::mock("CDC\Loja\FluxoDeCaixa\SAP");
        $sap->shouldReceive("envia")->andReturn(true);
        $acao1 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao1->shouldReceive("executa")->andReturn(true);
        $acao2 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao2->shouldReceive("executa")->andReturn(true);

        $relogio = new RelogioDoSistema();
        $tabela = Mockery::mock("CDC\Loja\Tributos\TabelaInterface");
        $tabela->shouldReceive("paraValor")
                ->with(1000.0)->andReturn(0.2);
        $gerador = new GeradorDeNotaFiscal(array($acao1, $acao2), $relogio, $tabela);
        $pedido = new Pedido("Andre", 1000, 1);
        $nf = $gerador->gera($pedido);

        $this->assertTrue($dao->persiste());
        $this->assertNotNull($nf);
    }

    /**
     * @covers CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal::gera()
     */
    public function testDeveEnviarNFGeradaParaSAP()
    {
        $dao = Mockery::mock("CDC\Loja\FluxoDeCaixa\NFDao");
        $dao->shouldReceive("persiste")->andReturn(true);
        $sap = Mockery::mock("CDC\Loja\FluxoDeCaixa\SAP");
        $sap->shouldReceive("envia")->andReturn(true);
        $acao1 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao1->shouldReceive("executa")->andReturn(true);
        $acao2 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao2->shouldReceive("executa")->andReturn(true);

        $relogio = new RelogioDoSistema();
        $tabela = Mockery::mock("CDC\Loja\Tributos\TabelaInterface");
        $tabela->shouldReceive("paraValor")
                ->with(1000.0)->andReturn(0.06);
        $gerador = new GeradorDeNotaFiscal(array($acao1, $acao2), $relogio, $tabela);
        $pedido = new Pedido("Andre", 1000, 1);
        $nf = $gerador->gera($pedido);

        $this->assertTrue($sap->envia());
        $this->assertEquals(1000 * 0.94, $nf->getValor(), null, 0.00001);
    }

    /**
     * @covers CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal::gera()
     */
    public function testDeveInvocarAcoesPosteriores()
    {
        $dao = Mockery::mock("CDC\Loja\FluxoDeCaixa\NFDao");
        $dao->shouldReceive("persiste")->andReturn(true);
        $sap = Mockery::mock("CDC\Loja\FluxoDeCaixa\SAP");
        $sap->shouldReceive("envia")->andReturn(true);
        $acao1 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao1->shouldReceive("executa")->andReturn(true);
        $acao2 = Mockery::mock(
                        "CDC\Loja\FluxoDeCaixa\AcaoAposGerarNotaInterface");
        $acao2->shouldReceive("executa")->andReturn(true);

        $relogio = new RelogioDoSistema();
        $tabela = Mockery::mock("CDC\Loja\Tributos\TabelaInterface");
        $tabela->shouldReceive("paraValor")
                ->with(1000.0)->andReturn(0.2);
        $gerador = new GeradorDeNotaFiscal(array($acao1, $acao2), $relogio, $tabela);
        $pedido = new Pedido("Andre", 1000, 1);
        $nf = $gerador->gera($pedido);

        $this->assertTrue($acao1->executa($nf));
        $this->assertTrue($acao2->executa($nf));
        $this->assertNotNull($nf);
        $this->assertInstanceOf(
                "CDC\Loja\FluxoDeCaixa\NotaFiscal", $nf);
    }

    /**
     * @covers CDC\Loja\FluxoDeCaixa\GeradorDeNotaFiscal::gera()
     */
    public function testDeveConsultarATabelaParaCalcularValor()
    {
        // mockando uma tabela, que ainda nem existe
        $tabela = Mockery::mock("CDC\Loja\Tributos\TabelaInterface");
        // definindo o futuro comportamento "paraValor",
        // que deve retornar 0.2 caso valor seja 1000.0
        $tabela->shouldReceive("paraValor")
                ->with(1000.0)->andReturn(0.2);

        $gerador = new GeradorDeNotaFiscal(array(), new RelogioDoSistema(), $tabela);
        $pedido = new Pedido("Andre", 1000.0, 1);
        $nf = $gerador->gera($pedido);
        //garantindo que a tabela foi consultada
        $this->assertEquals(1000 * 0.80, $nf->getValor(), null, 0.00001);
    }

}
