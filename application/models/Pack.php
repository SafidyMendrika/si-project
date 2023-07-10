<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pack extends CI_Model{

      public function listPack(){
        $this->db->select("*")->from("v_list_pack");
        $query=$this->db->get();
      return $query->result_array();
      }

      public function listPackGoal($id_goal){
        $this->db->select("*")->from("v_list_pack")->where("id_goal",$id_goal);
        $query=$this->db->get();
      return $query->result_array();
      }

      public function convertKg($kilo){
        $kcal_1kg = 7700;
        return $kcal_1kg * $kilo;
      }

      public function getNbJour($totalKcal, $sportKcal){
        $answer = $totalKcal/$sportKcal;
        return ceil(abs($answer));
      }
    }