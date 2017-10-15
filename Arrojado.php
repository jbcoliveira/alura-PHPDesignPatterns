<?php

class Arrojado implements Investimento {

    private $chance;

    public function investeSaldo(Conta $conta) {
        $this->chance = mt_rand(1, 100);

        if ($this->chance <= 20) {
            return $conta->getSaldo() * 0.05;
        } elseif ($this->chance > 20 && $this->chance <= 50) {
            return $conta->getSaldo() * 0.03;
        } elseif ($this->chance >= 50) {
            return $conta->getSaldo() * 0.006;
        }
    }

    
}
