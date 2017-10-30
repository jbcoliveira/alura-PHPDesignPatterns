<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface StatusDeUmaConta {

      public function saca(Conta $conta, $valor);
      public function deposita(Conta $conta, $valor);
}
