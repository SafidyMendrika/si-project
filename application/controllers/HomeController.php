<?php


class HomeController extends CI_Controller
{
    function index()
    {
        $this->load->view("index");
    }
}