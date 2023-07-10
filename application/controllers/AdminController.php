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
}