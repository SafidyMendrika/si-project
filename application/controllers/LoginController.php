<?php

class LoginController extends CI_Controller
{
    function index()
    {
        $this->load->view("pages/login");
    }

    function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url());
    }
}