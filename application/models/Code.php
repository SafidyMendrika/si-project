<?php

class Code extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }

    function findALl()
    {
        $q = $this->db->from("code")->select('*')->get();

        return $q->result_array();
    }
    public function insertCode($code){
        $this->db->select("*")->from("code")->where('code',$code);
        $query=$this->db->get();
        $q = $query->result_array();
        $result=$q[0]['is_used'];
        if($result==1){
            return false;
        }else{
            $sql="update code set status=10 where code=%s";
            $sql= sprintf($sql,$this->db->escape($code));
            echo $sql;
            $query=$this->db->query($sql);
        }
    }

    function accept()
    {
        
    }
}