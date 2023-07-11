<?php


class PackController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Pack");
        $this->load->model("Transaction");
        $this->load->model("User");
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

    function buyPack()
    {
        $idPack = $this->input->post("id_pack");
        $idUser = $this->session->userdata("data")["id"];

        $nbDay = $this->input->post("nb_day");
        $totalPrice = $this->input->post("total_price");


        try {
            $this->Pack->buyPack($idPack,$idUser,$nbDay,$totalPrice);

            $this->Transaction->transate("Achat d'un pack",$totalPrice);
        }catch (Exception $e){
            echo "false";
        }

        //$this->load->view("pages/my_pack");

    }
    function myPack(){
        $id_user = $this->session->userdata("data")["id"];

        $data["packs"] = $this->Pack->packOf($id_user);
        $this->load->view("pages/my_pack",$data);
    }
}

?>