<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Wallet extends CI_Model{

      public function pendingDemand($code){
        $this->db->select("*")->from("code")->where('code',$code);
        $query=$this->db->get();
        $q = $query->result_array();
        $result=$q[0]['is_used'];
        if($result==1){
          return false;
        }else{
          $sql="update code set status=10 where code=%s";
          $sql= sprintf($sql,$this->db->escape($code));
          echo $sql;
          $query=$this->db->query($sql);
        }  
      }

    }