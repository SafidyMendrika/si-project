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

      $this->load->model("User");
      $pdf = new FPDF();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',16);
      $pdf->Cell(40,10,'Hello World !');
      $pdf->Output();
    }
  
}