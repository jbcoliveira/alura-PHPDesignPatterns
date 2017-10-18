<?php

class RespostaCSV implements Resposta {

    public function responde(\Requisicao $req, \Conta $conta) {
        
        if ($req->getFormato() == Formato::$CSV) {
            return $conta->getTitular(). ';' .$conta->getSaldo();
        }
        else {
            return $this->proximaResposta->responde($req,$conta);
        }
        
    }

    public function setProxima(\Resposta $resposta) {
        $this->proximaResposta = $resposta;
    }


}
