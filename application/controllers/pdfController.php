<?php

class pdfController extends CI_Controller
{
    function index()
    {

        $this->load->library('pdf');
        $html = $this->load->view('GeneratepdfView', [], true);

        $this->createPdf($html,"popol");

    }

    function createPdf($html, $filename='', $stream=TRUE)
    {
        require_once("dompdf/dompdf_config.inc.php");
        $savein = 'uploads/policy_doc/';
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $canvas = $dompdf->get_canvas();
        $font = Font_Metrics::get_font("arial", "normal","12px");

        // the same call as in my previous example
        $canvas->page_text(540, 773, "Page {PAGE_NUM} of {PAGE_COUNT}",
            $font, 6, array(0,0,0));

        $pdf = $dompdf->output();      // gets the PDF as a string

        file_put_contents($savein.str_replace("/","-",$filename), $pdf);    // save the pdf file on server
        unset($html);
        unset($dompdf);

    }
}