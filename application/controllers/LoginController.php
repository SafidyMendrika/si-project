<?php

    class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("User");
        $this->load->model("Admin");
    }
    function index()
    {
        $this->load->view("pages/login");
    }

    function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url());
    }
        function admin()
        {
            $this->load->view("pages/admin_login");
        }
    public function loginAdmin(){
        $data=array();
        $mail=$this->input->post('mail');
        $mdp=$this->input->post('mdp');

        if($mail !=null && $mdp !=null){
            $data =$this->Admin->loginAdmin($mail,$mdp);

            if ($data != false){

            //$data["type"] = "u";
            $data["type"] = "a"; // admin

            $this->session->set_userdata("data",$data);

            redirect(base_url("AdminController"));
            }else{
                redirect($_SERVER["HTTP_REFERER"]);

            }

        }
    }
}