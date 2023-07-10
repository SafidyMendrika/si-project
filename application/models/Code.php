<?php

class Code extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }

    function findALl()
    {
        $q = $this->db->from("code")->select('*')->get();

        return $q->result_array();
    }
}