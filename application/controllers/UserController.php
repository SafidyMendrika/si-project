<?php

class UserController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('User');

    }
    function index()
    {
        $this->load->view("Home");

    }

    public function loginUser(){
      $data=array();
      $mail=$this->input->post('mail');
      $mdp=$this->input->post('mdp');

      if($mail !=null && $mdp !=null){
        $data =$this->User->loginUser($mail,$mdp);

        $this->session->set_userdata("data",$data);

        echo json_encode($data);
      }
    }

    public function singIn(){
      $this->load->model("User");
      $data=array();
      $mail=$this->input->post('mail');
      $mdp=$this->input->post('mdp');
      $is_google=$this->input->post('is_google');
      $name=$this->input->post('name');
      if($mail!=null && $mdp !=null && $name !=null){
        $this->User->singIn($mail,$mdp,$is_google,$name);
        $data["page"]="";
        $data["titre"]="";
        $this->load->view("Home",$data);
      }
    }

    public function getGoal(){
      $this->load->model("User");
      $data=array();
      $data["result"]=$this->User->getGoal();
      $data["page"]="";
      $data["titre"]="";
      $this->load->view("Home",$data); 
    }

    public function insertGoal(){
      $data=array();
      $id_user=$this->input->post('id_user');
      $weight=$this->input->post('weight');
      $age=$this->input->post('age');
      $weight_to_operate=$this->input->post('weight_to_operate');
      $id_goal=$this->input->post('id_goal');
      if($id_user !=null && $weight !=null && $age !=null && $weight_to_operate !=null && $id_goal !=null){
        $this->User->insertGoal($id_user,$weight,$age,$weight_to_operate,$id_goal);
        $data["page"]="";
        $data["titre"]="";
        $this->load->view("Home",$data);
      }
    }


}