<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Activity extends CI_Model{

      public function getActivity(){
        $this->db->select("*")->from("activity");
        $query=$this->db->get();
        return $query->result_array();
      }

      public function insertActivity($label,$kcal,$image_path){
        $sql="insert into activity values(default,%s,%g,%s)";
        $sql=sprintf($sql,$this->db->escape($label),$kcal,$this->db->escape($image_path));
        echo $sql;
        $this->db->query($sql);
      }

      public function deleteActivity($id_activity){
        $sql="delete from activity where id_activity=%g";
        $sql=sprintf($sql,$id_activity);
        echo $sql;
        $this->db->query($sql);
      }

      public function update($label,$kcal){
        $sql="update activity set kcal=%g";
        $sql2="update activity set label=%s";
        $sql=sprintf($sql,$kcal);
        $sql2=sprintf($sql2,$label);
        echo $sql;
        echo $sq2;
        $this->db->query($sql);
        $this->db->query($sql2);
      }

    }