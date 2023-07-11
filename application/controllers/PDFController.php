<?php

// require('fpdf.php');
require_once(APPPATH.'libraries/fpdf.php');

class PDFController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
    }

    public function exportPDF(){

      $this->load->model("Activity");
      $data=array();
      $data["result"]=$this->Activity->getActivity();
      $pdf = new FPDF();

      $pdf->AddPage();
      $pdf->SetFont('Arial','B',11);
      $pdf->Cell(30, 10, 'Column 1', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Column 2', 1, 1, 'C');

      foreach($data["result"] as $test){
        $pdf->Cell(30, 10, $test['label'], 1, 0, 'L');
        $pdf->Cell(30, 10, $test['kcal'], 1, 1, 'L');

      }
  
      $pdf->Output();
    }
  
}