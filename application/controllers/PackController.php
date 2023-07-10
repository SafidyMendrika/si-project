<?php


class PackController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Pack");
    }
    function pack()
    {

        $p =$this->Pack;
        $res = [];
        try {
            $res = $p->packs_for($this->session->userdata("data")["id"]);
        }catch (Exception $e){
            $e->getCode();
        }

        $data["packs"] = $res;

        $this->load->view("pages/pack",$data);
    }
  public function listPack(){
    $data=array();
    $this->load->model("Pack");
    $data["result"]=$this->Pack->listPack();
    echo json_encode($data);
  }

  public function packDetails(){
    $this->load->model("Pack");
    $data=array();
    $id_pack=$this->input->get('id_pack');
    //$id_pack=3;
    $data["result"]=$this->Pack->packDetails($id_pack);
    echo json_encode($data);
  }

    function myPack()
    {
        $this->load->view("pages/my_pack");

    }
}

?>