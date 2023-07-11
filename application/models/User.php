<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Model{
      function __construct()
      {
        parent::__construct();
        $this->load->model("Wallet");
      }

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
        $this->db->query($sql);

        $q = $this->db->from("users")->select("max(id_user)")->get();
        $id = $q->result_array()[0]["max"];

        $this->Wallet->initialize($id);
        
      }

      public function getGoal(){
        $sql="select * from goal";
        $query=$this->db->query($sql);
        return $query->result_array();
      }
      
      public function insertGoal($id_user,$id_goal){

        try {
          $query  = "UPDATE user_detail set id_goal = $id_goal where id_user = $id_user";

          $this->db->query($query);

        }catch (Exception $e){
          $sql="insert into user_detail(id_user,weight,age ,weight_to_operate ,id_goal) values(%g,%g,%g,%g,%g) ";
          $sql->sprintf($sql,$id_user,0,0,0,$id_goal);
          $this->db->query($sql);
        }
      }

      function getDetals($id_user)
      {
        $q = $this->db->from("user_detail")->select("*")->where("id_user",$id_user)->get();

        if ($q->num_rows() == 0){
          return false;
        }
        $o =  $q->result_array();
        return $o[0];
      }

      public function getInfoUser($id_user){
        $q = $this->db->from("v_info_user_complet")->select("*")->where("id_user",$id_user)->get();
        
        return $q->result_array();
      }  

    public function insertWallet($id_user,$value){
      $sql="insert into wallet values(default,%g,%g)";
      $sql=sprintf($sql,$id_user,$value);
      echo $sql;
      $this->db->query($sql);
    }

    public function insertUserSubscription($id_user,$id_subscription){
      $sql="insert into user_subscription values(%g,%g)";
      $sql=sprintf($sql,$id_user,$id_subscription);
      echo $sql;
      $this->db->query($sql);
    }
    

  }

    
?>  