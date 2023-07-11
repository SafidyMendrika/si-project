<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pack extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->model("User");
        $this->load->model("Activity");
        $this->load->model("Menu");
    }
  public function listPack(){
    $this->db->select("*")->from("v_list_pack");
    $query=$this->db->get();
  return $query->result_array();
  }
  public function packDetails($id){
    $this->db->select("*")->from("v_list_pack")->where('id_pack',$id);
    $query=$this->db->get();
    return $query->result_array();
  }
  
  public function listPackGoal($id_goal){
    $this->db->select("*")->from("pack")->where("id_goal",$id_goal);
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

    function buyPack($idPack,$idUser,$nbDay,$totalPrice)
    {
        $query = "INSERT INTO pack_user( id_pack , id_user , duration , price) VALUES(%s,%s,%s,%s) ";
        $query = sprintf($query,$this->db->escape($idPack),$this->db->escape($idUser),$this->db->escape($nbDay),$this->db->escape($totalPrice));

        try {
            $this->db->query($query);
        }catch (Exception $e ){
            return false;
        }

        return true;

        return false;
    }

  public function packs_for($id_user){
      $usr = new User();
      $act = $this->Activity;
      $mnu = $this->Menu;

        $detals = $usr->getDetals($id_user);

        if ($detals == false){
            return array();
        }

        $list_simple = $this->listPackGoal($detals["id_goal"]);

        $kcal_goal = $this->convertKg($detals["weight_to_operate"]);

      $tempkcal = 0;
      $actkcal = 0;
      $nb_day = 0;
      $result = array();

        foreach ($list_simple as $l){
            $tempkcal = $kcal_goal;
            $actkcal = 0;


            $menus = $mnu->getByPack($l["id_pack"]);
            foreach ($menus as $m){
                $tempkcal += $m["menukcal"];
            }

            $acts = $act->getByPack($l["id_pack"]);

            foreach ($acts as $a) {
                $actkcal += $a["activitykcal"];
            }

            $nb_day = $this->getNbJour($tempkcal,$actkcal);

            $l["nb_day"] = $nb_day;
            $l["total_price"] = $nb_day * $l["price"];

            $result[] = $l;
        }

        return $result;

  }
}
