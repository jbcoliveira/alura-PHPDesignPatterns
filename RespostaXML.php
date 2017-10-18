<?php

class RespostaXML implements Resposta {

    public function responde(\Requisicao $req, \Conta $conta) {
        if ($req->getFormato() == Formato::$XML) {
            return "<conta><titular>" . $conta->getTitular() . "</titular><saldo>" . $conta->getSaldo() . "</saldo></conta>";
        }
        else {
            return $this->proximaResposta->responde($req,$conta);
        }
    }

    public function setProxima(\Resposta $resposta) {
        $this->proximaResposta = $resposta;
    }

}
