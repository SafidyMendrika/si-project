<?php

class AdminController extends  CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->has_userdata("data") && $this->session->userdata("data")["type"] =="a"){

        }else{
            redirect(base_url());
        }

        $this->load->model("Admin");
        $this->load->model("Code");
    }

    function index()
    {
        redirect(base_url("AdminController/home"));
    }
    function home()
    {
        $data['alluser'] = $this->Admin->getNbUser();
        $data['perte'] = $this->Admin->getNbUserGoal(1);
        $data['prise'] = $this->Admin->getNbUserGoal(2);
        $this->load->view("pages/admin_home", $data);
    }

    public function getDemand(){
        $data=array();
        $data["result"]= $this->Admin->getDemand();
        echo json_encode($data);
    }

    public function demandValidation(){

        $id_code=$this->input->post('id_code');
        $action=$this->input->post('action');
        // $id_code=5;
        // $action=1;
        if($action == 0){
            $this->Admin->demandValidation($id_code,$action);
        }else{
        $this->Admin->demandValidation($id_code,$action);
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
    
    public function codeInsertion(){
        $code = $this->Code->generateCode();
        $valeur= 24000;
        $this->Code->insertCodeBack($code, $valeur);
    }

    function code()
    {
        $this->load->view("pages/admin_code");
    }

}