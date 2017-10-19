<?php

abstract class TemplateDeRelatorio {

    public function imprime($banco) {

        $this->cabecalho($banco);
        $this->corpo($banco);
        $this->rodape($banco);
    }

    protected abstract function cabecalho(\Banco $banco);

    protected abstract function corpo(\Banco $banco);

    protected abstract function rodape(\Banco $banco);
}
