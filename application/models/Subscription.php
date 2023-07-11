<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subscription extends CI_Model{

  public function getSubscriptionUser($id_user){
    $this->db->select("*")->from("user_subscription")->where('id_user',$id);
    $query=$this->db->get();
    return $query->result_array();
  }
    
  public function getSubscription(){
    $this->db->select("*")->from("subscription");
    $query=$this->db->get();
    return $query->result_array();
  }

  public function getSubscriptionById($id_subscription){
    $this->db->select("*")->from("subscription")->where('id_subscription',$id_subscription);
    $query=$this->db->get();
    $q=$query->result_array()[0];
    return $q['price'];
  }

  public function insertUserSubscription($id_user,$id_subscription){
      $sql="insert into user_subscription values(%g,%g)";
      $sql=sprintf($sql,$id_user,$id_subscription);
      $this->db->query($sql);
  }
  
}
