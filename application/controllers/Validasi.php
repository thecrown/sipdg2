<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Validasi extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			
		}
		public function BarangKeluar(){
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			$this->form_validation->set_rules('', 'fieldlabel', 'trim|required|xss_clean');
			
		}
}
 ?>