<?php

class UserController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('User');
        $this->load->model('Code');
        $this->load->model('Wallet');
        $this->load->model('Subscription');

    }
    function index()
    {
        $this->load->view("Home");
    }

    function createAccount($page = 1)
    {
        $data["page"] = $page;
        $this->load->view("pages/sign_up",$data);
    }
    public function loginUser(){
      $data=array();
      $mail=$this->input->post('mail');
      $mdp=$this->input->post('mdp');

      if($mail !=null && $mdp !=null){
        $data =$this->User->loginUser($mail,$mdp);

        if ($data != false){

            $data["type"] = "u";
            //$data["type"] = "a"; // admin

            $this->session->set_userdata("data",$data);

            echo json_encode($data);
        }else{
            echo "false";
        }
      }
    }

    public function singIn(){

      $mail=$this->input->post('mail');
      $mdp=$this->input->post('mdp');
      $is_google=0;
      $name=$this->input->post('name');
      if($mail!=null && $mdp !=null && $name !=null){
        $this->User->singIn($mail,$mdp,$is_google,$name);
          redirect(base_url("UserController/createAccount/2"));
      }
      redirect($_SERVER["HTTP_REFERER"]);
    }

    public function getGoal(){
      $this->load->model("User");
      $data=array();
      $data["result"]=$this->User->getGoal();
      echo json_encode($data);
    }

    public function insertGoal(){
      $data=$this->session->userdata("data");
      $id_user= $data["id"] ;
      $id_goal=$this->input->get('id_goal');

      /*if($id_user !=null && $weight !=null && $age !=null && $weight_to_operate !=null && $id_goal !=null){
        //$this->User->insertGoal($id_user,$weight,$age,$weight_to_operate,$id_goal);

        $this->load->view("Home",$data);
      }*/
    }

    function profil()
    {
      $data=$this->session->userdata("data");
      $id_user= $data["id"] ;
      $data["result"]=$this->User->getInfoUser($id_user);
      foreach ($this->User->getInfoUser($id_user) as $element) {
        $data["imc"] = $this->User->getIMC($element["weight"], $element["height"]);
      }
      $this->load->view("pages/profil", $data);
    }

    function insertDetals()
    {
        $q = $this->db->from("users")->select("max(id_user)")->get();
        $id_user = $q->result_array()[0]["max"];
        $age = $this->input->post("age");
        $poids = $this->input->post("poids");
        $taille = $this->input->post("taille");

        $this->User->insertDetals($id_user,$age,$poids,$taille);

        redirect(base_url("LoginController"));
    }
    public function modificationProfil(){
      $this->load->view("pages/modificationprofil");
    }

    function code()
    {
        $data["codes"] = $this->Code->findAll();
        $this->load->view("pages/code",$data);
    }

    public function insertGold(){

      $id_user=$this->session->userdata("data")["id"];
      $id_subscription=$this->input->get("id_subscription");
      $price=$this->Subscription->getSubscriptionById($id_subscription);

      try {
        $amount = $this->Wallet->getAmount($id_user);
        if($amount < $price){
          echo json_encode(array(
            "error" =>"solde insufisant"
        ));
        return;
        }
        $this->Subscription->insertUserSubscription($id_user,$id_subscription);

      }catch (Exception $e){
        echo "false";
    }
    }


}