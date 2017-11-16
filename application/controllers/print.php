<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print extends CI_Controller {

	function dopdf($mydat){

            $this->CI->output->enable_profiler(false);
            $this->CI->load->library('parser');
            require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');

            // set vars
            $tpl_path = 'path/to/view_tpl.php';
            $thefullpath = '/path/to/file_pdf.pdf';
            $preview = false;
            $previewpath = '/path/to/preview_pdf.pdf';


            // PDFs datas
            $datas = array(
              'first_name' => $mydat->first_name,
              'last_name'  => $mydat->last_name,
              'site_title' => config_item('site_title'),
            );

            // Encode datas to utf8
            $tpl_data = array_map('utf8_encode',$datas);


            // 
            // GENERATE PDF AND SAVE FILE (OR OUTPUT)
            //

            $content = $this->CI->parser->parse($tpl_path, $tpl_data, TRUE);
            $html2pdf = new HTML2PDF('P','A4','fr', true, 'UTF-8',  array(7, 7, 10, 10));
            $html2pdf->pdf->SetAuthor($tpl_data['site_title']);
            $html2pdf->pdf->SetTitle($tpl_data['site_title']);
            $html2pdf->pdf->SetSubject($tpl_data['site_title']);
            $html2pdf->pdf->SetKeywords($tpl_data['site_title']);
            $html2pdf->pdf->SetProtection(array('print'), '');//allow only view/print
            $html2pdf->WriteHTML($content);
            if (!$preview) //save
              $html2pdf->Output($thefullpath, 'F');
            else { //save and load
              $html2pdf->Output($previewpath, 'D');
            }

        }

}

/* End of file print.php */
/* Location: ./application/controllers/print.php */