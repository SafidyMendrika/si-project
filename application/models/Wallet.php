<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Wallet extends CI_Model{


      public function pendingDemand($code,$id_user){
        $this->db->select("*")->from("code")->where('code',$code);
        $query=$this->db->get();
        $q = $query->result_array();
        $result=$q[0]['is_used'];
        if($result==1){
          return false;
        }else{
          $sql="update code set status=10 where code=%s";
          $sql2="update code set id_user=%g where code=%s";
          $sql= sprintf($sql,$this->db->escape($code));
          $sql= sprintf($sql,$id_user,$this->db->escape($code));
          echo $sql;
          echo $sql2;
          $query=$this->db->query($sql);
          $query=$this->db->query($sql2);
        }  
      }

    }