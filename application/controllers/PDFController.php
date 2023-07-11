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

      $this->load->model("Pack");
      $this->load->model("Menu");
      $this->load->model("Activity");
      $data=array();
      $id_user=$this->input->get('id_user');
      //$id_user=1;
      $data["result"]=$this->Pack->packof($id_user);
      $pdf = new FPDF();

      $pdf->AddPage();
      $pdf->SetFont('Arial','B',11);
      $pdf->Cell(30, 10, 'Column 1', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Column 2', 1, 1, 'C');
      $pdf->Ln(10);
      $pdf->Cell(30, 10, 'Column 3', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Column 4', 1, 1, 'C');

      foreach($data["result"] as $test){
        foreach($this->Menu->getByPack($test["id_pack"]) as $menu){
          $pdf->Cell(30, 10,$menu["menu"] , 1, 0, 'L');
          $pdf->Cell(30, 10,$menu["menukcal"] , 1, 1, 'L');
        
        }
        
        foreach($this->Activity->getBypack($test["id_pack"]) as $activity){
          $pdf->Cell(30, 10,$activity["activity"] , 1, 0, 'L');
          $pdf->Cell(30, 10,$activity["activitykcal"] , 1, 1, 'L');
        }

      }
  
      $pdf->Output();
    }
  
}