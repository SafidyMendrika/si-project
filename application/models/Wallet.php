<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Wallet extends CI_Model{

      public function getMoney($code){
        $this->db->select("*")->from("code")->where('code',$code);
        $query=$this->db->get();
        $result=$query->result_array()[0]['is_used'];
        if($result==1){
          return false;
        }else{
          return $query->result_array()[3]['value'];
        }  
      }

    }