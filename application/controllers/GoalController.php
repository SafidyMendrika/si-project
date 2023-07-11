<?php

class GoalController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Goal");
        $this->load->model("User");

        if ($this->session->has_userdata("data")){
            $this->load->model("Wallet");
            $amount = $this->Wallet->getAmount($this->session->userdata("data")["id"]);
            $this->session->set_userdata("amount",$amount);
        }
    }
    function index()
    {
        if ($this->session->has_userdata("data") == false){
            redirect(base_url());
        }
        $id_user = $this->session->userdata("data")["id"];

        $detals = $this->User->getDetals($id_user);

        if ($detals["id_goal"] != null){
            redirect(base_url("PackController/pack"));
        }else{
            $this->load->view("pages/goal");

        }
    }

    function insertGoal($idGoal)
    {
        $idUser = $this->session->userdata("data")["id"];

        $this->User->insertGoal($idUser,$idGoal);

        redirect(base_url("PackController/pack"));
    }

    
}