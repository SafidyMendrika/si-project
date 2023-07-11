<?php

class AdminController extends  CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Admin");
    }

    function index()
    {
        $this->load->view("pages/admin_login");
    }
    function home()
    {
        $this->load->view("pages/admin_home");
    }

    public function getDemand(){
        $data=array();
        $data["result"]= $this->Admin->getDemand();
        echo json_encode($data);
    }

    public function demandValidation(){

        $id_code=$this->input->post('id_code');
        //$id_code=2;
        $this->Admin->demandValidation($id_code);
        $data=array();
        $data["result"]=$this->Admin->selectValueCode($id_code);
        foreach($data["result"] as $test){
            $id_user=$test['id_user'];
            $value=$test['value'];
            $this->load->model("User");
            $this->User->insertWallet($id_user,$value);
        }
 
    }
}