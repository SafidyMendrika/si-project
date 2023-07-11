<?php

// require('fpdf.php');
require_once(APPPATH.'libraries/fpdf.php');

class PDFController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
        $this->load->model('Pdf');
    }

    public function exportPDF(){

      $this->load->model("Pack");
      $this->load->model("Menu");
      $this->load->model("Activity");
      $data=array();
      $id_user=$this->input->get('id_user');
      //$id_user=1;
      $data["result"]=$this->Pack->packof($id_user);
      $pdf = new FPDF();

      $pdf->Image(base_url("assets/img/diet-tracker.png"),10,6,30);
  
      $pdf->Output();
    }
  
}