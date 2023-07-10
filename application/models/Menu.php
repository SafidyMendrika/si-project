<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Model
{
    public function getByPack($id_pack){
        $this->db->select("*")->from("v_list_menu_par_pack")->where("id_pack",$id_pack);
        $query=$this->db->get();
      return $query->result_array();
      }

    public function getTotalKcal($id_pack){
        $this->db->select("sum(v_list_menu_par_pack.menukcal)")->from("v_list_menu_par_pack")->where("id_pack",$id_pack);
        $query=$this->db->get();
      return $query->result_array();
    }

    public function get($id_pack){
        $list_pack = $this->getByPack($id_pack);
        foreach ($list_pack as $element) {
            $element['total_kcal'] = $this->getTotalKcal($id_pack);
        }
        return $list_pack;
    }
}