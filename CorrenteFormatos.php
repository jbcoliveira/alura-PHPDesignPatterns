<?php
 
class CorrenteFormatos {

    public function requisita(Requisicao $req, Conta $conta) {
        $r1 = new RespostaXML();
        $r2 = new RespostaCSV();
        $r3 = new RespostaPorcento();

        $rultima = new SemResposta();

        $r1->setProxima($r2);
        $r2->setProxima($r3);
        $r3->setProxima($rultima);

        return $r1->responde($req, $conta);
    }

}
