<?php

class AdminController extends  CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Admin");
        $this->load->model("Code");
        $this->load->model("Activity");
        $this->load->model("Menu");
        $this->load->model("Pack");
    }

    function index()
    {
        $this->load->view("pages/admin_login");
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

    public function codeInsertion(){
        $code = $this->Code->generateCode();
        $valeur= $_POST['value'];
        $this->Code->insertCodeBack($code, $valeur);

        redirect($_SERVER["HTTP_REFERER"]);
    }

    function code()
    {
        $data['code'] = $this->Code->findAll();
        $this->load->view("pages/admin_code", $data);
    }

    public function loginAdmin(){
    
            $data=array();
            $mail=$this->input->post('mail');
            $mdp=$this->input->post('mdp');
      
            if($mail !=null && $mdp !=null){
              $data =$this->User->loginAdmin($mail,$mdp);
                //$data["type"] = "u";
                $data["type"] = "a"; // admin
      
              $this->session->set_userdata("data",$data);
      
              echo json_encode($data);
            }
    }

    public function numbers(){
        $data['alluser'] = $this->Admin->getNbUser();
        $data['perte'] = $this->Admin->getNbUserGoal(1);
        $data['prise'] = $this->Admin->getNbUserGoal(2);
        $this->load->view("pages/admin_numbers", $data);
    }

    public function packs(){
        $data['pack'] = $this->Pack->getAllPack();
        $this->load->view("pages/admin_packs", $data);
    }

    public function regimes(){
        $data['menu'] = $this->Menu->getAllMenu();
        $this->load->view("pages/admin_regimes", $data);
    }

    public function activites(){
        $data['activity'] = $this->Activity->getAllActivity();
        $this->load->view("pages/admin_activities", $data);
    }
    
}