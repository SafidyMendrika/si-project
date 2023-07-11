<?php

class Admin extends  CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getDemand(){     
        $this->db->select("*")->from("code")->where('status',10);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function demandValidation($id_code){
        $sql="update code set status=20 where id_code=%g";
        $sql2="update code set is_used=1 where id_code=%g";
        $sql=sprintf($sql,$id_code);
        $sql2=sprintf($sql,$id_code);
        $this->db->query($sql);
        $this->db->query($sql2);
    }

    public function selectValueCode($id_code){
        $this->db->select("*")->from("code")->where('id_code',$id_code);
        $query=$this->db->get();
        return $query->result_array();
    }

}