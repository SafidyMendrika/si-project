<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pack extends CI_Model{

      public function listPack(){
        $this->db->select("*")->from("v_list_pack");
        $query=$this->db->get();
      return $query->result_array();
      }
    }