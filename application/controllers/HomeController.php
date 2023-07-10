<?php


class HomeController extends CI_Controller
{
    function index()
    {
        $this->load->view("index");
    }

    function checkgoal()
    {
        if ($this->session->has_userdata("data") == false){
            redirect(base_url());
        }
    }
}