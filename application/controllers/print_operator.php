<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_operator extends CI_Controller {

	public function CetakPDF()
	{
		$this->load->library('pdf_report');
		$this->form_validation->set_rules('bulan', 'bulan', 'trim|xss_clean');
		$this->form_validation->set_rules('tahun', 'tahun', 'trim|xss_clean');

		if($this->input->post('bulan')=="all" && $this->input->post('tahun') == "all"){
			$data=$this->Model_barang->GetSaldoBarang_view();
			// $jumlah = $this->Model_barang->getpenambahan($data->id_barang);
			// die(print_r($data));

			$this->load->view('admin/v_report',['data'=>$data]);

		}else{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$data=$this->Model_barang->GetSaldoBarang_view();
			$this->load->view('admin/v_report_perbulan',['data'=>$data,'bulan'=>$bulan,'tahun'=>$tahun]);
		}
		
	}

}

/* End of file print_operator.php */
/* Location: ./application/controllers/print_operator.php */