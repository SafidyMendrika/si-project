<?php

class GoalController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Goal");
    }
    function index()
    {
        if ($this->session->has_userdata("data") == false){
            redirect(base_url());
        }

        $this->load->view("pages/goal");
    }
}