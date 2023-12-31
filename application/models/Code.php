<?php

class Code extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }

    function findALl()
    {
        $q = $this->db->from("code")->select('*')->order_by('id_code', 'desc')->get();

        return $q->result_array();
    }
    public function insertCode($code,$id_user)
    {

        $this->db->select("*")->from("code")->where('code', $code);
        $query = $this->db->get();
        $q = $query->result_array();
        echo $this->db->last_query();
        if (count($q) == 0) {
            return false;
        } else {
            $result = $q[0]['is_used'];
            if ($result == 1) {
                return false;
            } else {
                $sql = "update code set status=10, id_user=$id_user where code=%s";
                $sql = sprintf($sql, $this->db->escape($code));
                $query = $this->db->query($sql);
            }
        }
    }



    function generateCode(){
        $debut = 0;
        $answer="";
        while($debut < 9){
            $rand= rand(0, 9);
            $answer = $answer.$rand;
            $debut++;
        }
        return $answer;
    }

    function insertCodeBack($code, $valeur){
        $sql="insert into code values(default, $code, $valeur, 0, 0, null)";
        echo $sql;
        $this->db->query($sql);
    }
}