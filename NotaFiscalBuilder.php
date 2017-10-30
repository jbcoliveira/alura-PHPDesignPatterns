<?php

class NotaFiscalBuilder {

    private $razaoSocial;
    private $CNPJ;
    private $valorTotal;
    private $impostos;
    private $data;
    private $observacoes;
    private $itens;
    private $acoesAposGerarNota;

    function __construct() {
        $this->itens = array();
        $this->valorTotal = 0;
        $this->impostos = 0;
        $this->data = date("d/m/Y");
        $this->acaosAposGerarNota = array();
    }

    public function paraEmpresa($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function comCnpj($cnpj) {
        $this->CNPJ = $cnpj;
    }

    public function comItem(ItemDaNota $item) {
        $this->itens[] = $item;
        $this->valorTotal += $item->getValor();
        $this->impostos += $item->getValor() * 0.05;
    }

    public function comObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function naData($data) {
        $this->data = $data;
    }

    public function adicionaAcao(AcaoAposGerarNota $novaAcao) {
        $this->acoesAposGerarNota[] = $novaAcao;
    }

    public function executaAcoesAposGerarNota(NotaFiscal $notaFiscal) {
        foreach ($this->acoesAposGerarNota as $acao) {
            $acao->executa($notaFiscal);
        }
    }

    public function build() {
        $notaFiscal = new NotaFiscal($this->razaoSocial, $this->CNPJ, $this->valorTotal, $this->impostos, $this->data, $this->observacoes, $this->itens);
        $this->executaAcoesAposGerarNota($notaFiscal);
    }

}
