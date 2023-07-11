<?php

class ActivityController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }

    public function getActivity(){
      $this->load->model("Activity");
      $data=array();
      $data["result"]=$this->Activity->getActivity();
      echo json_encode($data);
    }

    public function insertActivity(){
      $this->load->model("Activity");
      $label=$this->input->post('labal');
      $kcal=$this->input->post('kcal');
      $image_path=$this->input->post('image_path');
      // $label='yoga';
      // $kcal=456;
      // $image_path='image.jgp';
      if($label!=null && $kcal !=null && $image_path !=null){
        $this->Activity->insertActivity($label,$kcal,$image_path);
      }
    }

    public function deleteActivity(){
      $this->load->model("Activity");
      $id_activity=$this->input->get('id_activity');
      //$sure=$this->input->get('sure');
      // $id_activity=17;
      $this->Activity->deleteActivity($id_activity);
    }

    public function updateActivity(){
      $this->load->model("Activity");
      $kcal=$this->input->post('kcal');
    }

}