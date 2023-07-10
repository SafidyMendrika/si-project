<?php

class LoginController extends CI_Controller
{
    function index()
    {
        $this->load->view("pages/login");
    }
}