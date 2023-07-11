<?php

class SubscriptionController extends  CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Subscription");
    }

    public function getSubscriptionUser(){
      $id_user=$this->input->post("id_user");  
      $data=array();  
      $data["result"]=$this->Subscription->getSubscriptionUser($id_user);
      echo json_encode($data);
    }

    public function getSubscription(){
      $data=array();
      $data["result"]=$this->Subscription->getSubscription();
      echo json_encode($data);
    }

    public function getSubscriptionById(){
      $data=array();
      $id_subscription=$this->input->get("id_user");
      $data["result"]=$this->Subscription->getSubscriptionById($id_subscription);
      echo json_encode($data);
    }

}