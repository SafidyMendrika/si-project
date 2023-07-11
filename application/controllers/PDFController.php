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

      $nomfichier="index";
      $this->load->helper('file');
      $path= APPPATH.'views/'.$nomfichier;
      $filename=read_file($path);
      $pdf = new FPDF();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',16);
      $pdf->WriteHTML($filename);
      $filenamePDF=$nomfichier . ".pdf";
      //$pdf->Cell(40,10,'Hello World !');
      $pdf->Output($filenamePDF,'D');
    }
  
}