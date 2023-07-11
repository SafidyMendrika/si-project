<?php

class WalletController extends CI_Controller
{

  public function pendingDemand(){
    $this->load->model("Wallet");
    $data=array();
    //$code=$this->input->post('code');
    $code='258369147';
    $data["result"]=$this->Wallet->pendingDemand($code);
  }

}

?>