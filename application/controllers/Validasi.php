<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Validasi extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			
		}
		public function UpdateAdmin(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('no_telephone', 'No Telephone', 'trim|required|xss_clean');
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
			$this->form_validation->set_rules('no_telephone', 'No Telephone', 'trim|required|xss_clean');
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
	public function AddOperator(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('no_telephone', 'No Telephone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('matchPassword', 'Password', 'trim|required|xss_clean|matches[Password]');
			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$return  = $this->Model_admin->AddOperator();
				if($return == true){
					$msg['msg'] = "Data Operator berhasil di Tembahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data Gagal di Tambahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
	public function AddAdmin(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('no_telephone', 'No Telephone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('matchPassword', 'Password', 'trim|required|xss_clean|matches[Password]');
			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$return  = $this->Model_admin->AddAdmin();
				if($return == true){
					$msg['msg'] = "Data Admin berhasil di Tembahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data Gagal di Tambahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
	public function TambahBarangMasuk(){
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
			$this->form_validation->set_rules('barang', 'Nama Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kode', 'Kode Satuan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('jenis', 'Jenis Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stock', 'Jumlah', 'trim|required|xss_clean');
			$this->form_validation->set_rules('harga', 'Harga Satuan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('total', 'Total Harga', 'trim|required|xss_clean');

			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$return  = $this->Model_barang->TambahBarangMasuk();
				if($return == true){
					$msg['msg'] = "Data Barang berhasil di Tembahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data Barang Gagal di Tambahkan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
	public function UpdateCatatBarangMasuk($id)
	{
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama', 'Nama Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kode', 'Kode Satuan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('jenis', 'Jenis Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|xss_clean');
			$this->form_validation->set_rules('harga', 'Harga Satuan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('total', 'Total Harga', 'trim|required|xss_clean');

			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{

				$return  = $this->Model_barang->UpdateCatatBarangMasuk($id);
				if($return == true){
					$msg['msg'] = "Data pencatatan Barang berhasil di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Data pencatatan Barang Gagal di Update";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
}
 ?>