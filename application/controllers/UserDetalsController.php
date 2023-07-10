<?php


class UserDetalsController extends CI_Controller
{

  public function getUserDetals(){
    $this->load->model("UserDetals");
    $data=array();
    $id_user=$this->input->post('id_user');
    $id_goal=$this->input->post('id_goal');
    // $id_goal=1;
    // $id_user=1;
    $this->UserDetals->getUserDetals($id_user,$id_goal);
  }
}

?>