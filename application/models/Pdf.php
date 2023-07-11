<?php

require_once(APPPATH.'libraries/fpdf.php');
class Pdf extends CI_Model
{
    function generateTemplate()
    {
        $pdf = new FPDF();

        $pdf->AddPage();
        $pdf->Image(base_url("assets/img/diet-tracker.png"));

        return $pdf;

    }
}