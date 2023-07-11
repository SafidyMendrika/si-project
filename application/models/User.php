<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Model
    {
      function __construct()
      {
        parent::__construct();
        $this->load->model("Wallet");
      }

      public function loginUser($mail, $mdp)
      {
        $sql = "select * from users where mail=%s and mdp=%s and is_admin = 0";
        $sql = sprintf($sql, $this->db->escape($mail), $this->db->escape(md5($mdp)));
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0) {
          return false;
        } else {
          $row = $query->result_array();

          return array(
              "id" => $row[count($row) -1]["id_user"],
              "name" => $row[count($row) -1]['name']
          );
        }
      }

      public function singIn($mail, $mdp, $is_google, $name)
      {
        $sql = "insert into users values(default,%s,%s,%g,%s,%g)";
        $sql = sprintf($sql, $this->db->escape($mail), $this->db->escape(md5($mdp)), $is_google, $this->db->escape($name), 0);
        $this->db->query($sql);

        $q = $this->db->from("users")->select("max(id_user)")->get();
        $id = $q->result_array()[0]["max"];

        $this->Wallet->initialize($id);

      }

      public function getGoal()
      {
        $sql = "select * from goal";
        $query = $this->db->query($sql);
        return $query->result_array();
      }

      public function insertGoal($id_user, $id_goal)
      {

        try {
          $query = "UPDATE user_detail set id_goal = $id_goal where id_user = $id_user";

          $this->db->query($query);

        } catch (Exception $e) {
          $sql = "insert into user_detail(id_user,weight,age ,weight_to_operate ,id_goal,height) values(%g,%g,%g,%g,%g,%g) ";
          $sql->sprintf($sql, $id_user, 0, 0, 0, $id_goal,0);
          $this->db->query($sql);
        }
      }

      function insertDetals($id_user,$age,$poids,$taille)
      {

        $q = $this->db->select("id_user")->from("user_detail")->where("id_user",$id_user)->get();

        $query = "";
        if ($q->num_rows() == 0){
          $query = "insert into user_detail(id_user,weight,age ,weight_to_operate ,height) values(%g,%g,%g,%g,%g) ";
          $query = sprintf($query, $id_user, $poids, $age, 0,$taille );

        }else{
          $query = "UPDATE user_detail set weight = $poids, age = $age , height=$taille where id_user=$id_user ";
        }

        $this->db->query($query);
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

    public function getIMC($poids, $taille){
      return ($poids)/($taille * $taille);
    }
  }
    
?>  