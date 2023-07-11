<?php

class AdminController extends  CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Admin");
        $this->load->model("Code");
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
        $valeur= 24000;
        $this->Code->insertCodeBack($code, $valeur);
    }

    function code()
    {
        $this->load->view("pages/admin_code");
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
}