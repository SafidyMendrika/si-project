<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class UserDetals extends CI_Model{

      public function getUserDetals($id_user,$id_goal){
        $this->db->select("*")->from("user_detail")->where('id_user',$id_user)->where('id_goal',$id_goal);
        $query=$this->db->get();
        $q=$query->result_array();
        if(count($q)!=0){
          $sql="update user_detail set id_goal=%g";
          $sql= sprintf($sql,$id_goal);
          echo $sql;
          $query=$this->db->query($sql);
        }else{
          $sql="insert into user_detail values (default,%g,null,null,null,null)";
          $sql=sprintf($sql,$id_user);
          $this->db->query($sql);
        }
      }
    }