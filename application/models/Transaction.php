<?php

class Transaction extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function transate($label,$amount)
    {
        $query = "INSERT INTO  transaction(label,amount) VALUES (%s,%s)";

        $query = sprintf($query,$this->db->escape($label),$this->db->escape($amount));

        $this->db->query($query);
    }
}