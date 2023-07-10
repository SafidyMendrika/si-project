<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Goal extends  CI_Model
{
    public function getGoalOf($id_user){
        $this->db->select("id_goal")->from("user_detail")->where("id_user",$id_user);
        $query=$this->db->get();
      return $query->result_array()[0];
      }
}