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
			
		}
		public function UpdateAdmin(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('matchPassword', 'Password', 'trim|required|xss_clean|matches[Password]');
			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$id = $this->input->post('id');

				$return  = $this->Model_admin->UpdateAdmin($id);
				if($return == true){
					$msg['msg'] = "Data Admin berhasil di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data Gagal di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
	public function UpdateOperator(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('matchPassword', 'Password', 'trim|required|xss_clean|matches[Password]');
			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$id = $this->input->post('id');

				$return  = $this->Model_admin->UpdateOperator($id);
				if($return == true){
					$msg['msg'] = "Data Operator berhasil di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data Gagal di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
}
 ?>