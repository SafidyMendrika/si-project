<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Model
{
    public function getByPack($id_pack){
        $this->db->select("distinct(id_menu)id_pack,menu,menukcal")->from("v_list_pack")->where("id_pack",$id_pack);
        $query=$this->db->get();
      return $query->result_array();
      }

    public function getTotalKcal($id_pack){
        $this->db->select("sum(v_list_menu_par_pack.menukcal)")->from("v_list_menu_par_pack")->where("id_pack",$id_pack);
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

    public function get($id_pack){
        $list_pack = $this->getByPack($id_pack);
        foreach ($list_pack as $element) {
            $element['total_kcal'] = $this->getTotalKcal($id_pack);
            $element['duration'] = ($this->getTotalKcal($id_pack) + $this->convertKg($element['weight_to_operate']));
        }
        return $list_pack;
    }

    public function getAllMenu(){
      $this->db->select("*")->from("menu")->order_by('id_menu', 'desc');
      $query=$this->db->get();
      return $query->result_array();
      
    }

    public function insertMenu($nom, $kcal){
      $sql="insert into menu values(default, '$nom', $kcal, 'sakafoUni.jpg')";
        echo $sql;
        $this->db->query($sql);
    }
}