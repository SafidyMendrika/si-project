<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diet extends  CI_Model
{

  public function getDiet(){
    $this->db->select("*")->from("menu");
    $query=$this->db->get();
    return $query->result_array();
  }

  public function insertDiet($label,$kcal,$image_path){
    $sql="insert into menu values(default,%s,%g,%s)";
    $sql=sprintf($sql,$this->db->escape($label),$kcal,$this->db->escape($image_path));
    echo $sql;
    $this->db->query($sql);
  }

  public function deleteDiet($id_menu){
    $sql="delete from menu where id_menu=%g";
    $sql=sprintf($sql,$id_activity);
    echo $sql;
    $this->db->query($sql);
  }

    public function updateDiet($label,$kcal,$id_activity){
      $sql="update menu set kcal=%g where id_menu=%g";
      $sql2="update menu set label=%s where id_menu=%g";
      $sql=sprintf($sql,$kcal,$id_activity);
      $sql2=sprintf($sql2,$this->db->escape($label),$id_activity);
      echo $sql;
      echo $sql2;
      $this->db->query($sql);
      $this->db->query($sql2);
    }

    public function getDietById($id_menu){
      $this->db->select("*")->from("menu")->where('id_menu',$id_menu);
      $query=$this->db->get();
      return $query->result_array();
      
    }
    

}