<?php


class PackController extends CI_Controller
{

  public function listPack(){
    $data=array();
    $this->load->model("Pack");
    $data["result"]=$this->Pack->listPack();
    $data["page"]="";
    $data["titre"]="";
    $this->load->view("Home",$data);
  }

}

?>