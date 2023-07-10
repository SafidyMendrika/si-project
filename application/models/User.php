<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Model{

      public function loginUser($mail,$mdp){
        $sql="select * from users where mail=%s and mdp=%s";
        $sql = sprintf($sql,$this->db->escape($mail),$this->db->escape(md5($mdp)));
        $query=$this->db->query($sql);
        if(count($query)==0){
          return false ;
        }else{
          $row=$query->row_array();
          return array(
            "id" => $row["id_user"],
            "name" =>$row['name']
          );
        }  
      }

      public function singIn($mail,$mdp,$is_google,$name){
        $sql="insert into users values(default,%s,%s,%g,%s,%g)";
        $sql = sprintf($sql,$this->db->escape($mail),$this->db->escape(md5($mdp)),$is_google,$this->db->escape($name),0);
        echo $sql;
        $this->db->query($sql);
      }

      public function getGoal(){
        $sql="select * from goal";
        $query=$this->db->query($sql);
        return $query->result_array();
      }
      
      public function insertGoal($id_user,$weight,$age,$weight_to_operate,$id_goal){
        $sql="insert(id_user,weight,age ,weight_to_operate ,id_goal) into  user_detail values(%g,%g,%g,%g,%g) ";
        $sql->sprintf($sql,$id_user,$weight,$age,$weight_to_operate,$id_goal);
        echo $sql;
        $query=$this->db->query($sql);
    
      }
      
      
    }

    
?>  