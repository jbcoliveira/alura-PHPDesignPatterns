<?php

class SemResposta implements Resposta {

    public function responde(\Requisicao $req, \Conta $conta) {
        return "";
    }

    public function setProxima(\Resposta $resposta) {
        
    }

}
