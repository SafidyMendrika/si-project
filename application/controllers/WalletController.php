<?php

class WalletController extends CI_Controller
{

  public function getMoney(){
    $this->load->model("Wallet");
    $data=array();
    //$code=$this->input->post('code');
    $code='123456789';
    $data["result"]=$this->Wallet->getMoney($code);
    echo json_encode($data);
  }
}

?>