<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			if($this->session->userdata('role')==false){
				redirect ('login');
			}else if($this->session->userdata('role')!="operator"){
				redirect ('admin');
			}
		}
	public function index()
	{
		$data['sidabar']='sidebar_operator';
		$data['main_view']='dashboard_operator';
		$this->load->view('tampilan_home',$data);
	}
	public function BarangKeluar(){
		$data['sidabar']='sidebar_operator';
		$data['main_view']='/barang/barang_keluar_operator';
		$data['kode']=$this->Model_admin->GetKode_View();
		$data['jenis']=$this->Model_admin->GetJenis_View();
		$data['barang']=$this->Model_admin->GetBarang_View();	
		$this->load->view('tampilan_home',$data);
	}
	public function View_profile(){
		$data['sidabar']='sidebar_operator';
		$data['main_view']='/admin/profile_operator';	
		$this->load->view('tampilan_home',$data);	
	}
	public function tambahambilbarang(){
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
			$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|xss_clean|numeric');
			$this->form_validation->set_rules('penerima', 'Penerima', 'trim|required|xss_clean|alpha_numeric_spaces');
				
			if($this->form_validation->run()==false){
				$msg['msg'] = validation_errors();
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{
				$id = $this->input->post('nama_barang');
				$return  = $this->Model_barang->TambahBarangKeluar($id);
				if($return == true){
					if($this->input->post('tambah')=="2"){
						
						$msg['msg'] = "Data pencatatan Barang keluar berhasil ditambahkan";
			            $this->session->set_flashdata($msg);
			            redirect($this->input->server('HTTP_REFERER'));

					}else{
						$msg['msg'] = "Data Barang berhasil di Tambahkan";
		            	$this->session->set_flashdata($msg);
		        		redirect('Catatan-Keluar-operator');
					}
					 
				}else{
					$msg['msg2'] = "Barang yang Anda Minta Jumlahnya lebih sedikit dari permintaan";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
	}
	public function GantiPassOperator($id)
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password2', 'Ulangi Password', 'trim|required|xss_clean|matches[password]');

		if ($this->form_validation->run()==false) {
			$msg['msg'] = validation_errors();
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		} else {
			$return  = $this->Model_admin->UpdatePassword($id);
				if($return == true){
					$msg['msg'] = "Ubah Password berhasil ";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER')); 
				}else{
					$msg['msg2'] = "Ubah Password Gagal ";
		            $this->session->set_flashdata($msg);
		            redirect($this->input->server('HTTP_REFERER'));
				}
		}
		
	}

	public function BarangKeluarOperator()
	{
		$data['sidabar']='sidebar_operator';
		$data['main_view']='/barang/catatan_barang_keluar';	
		$data['nama']=$this->Model_admin->GetBarang_View();
		$data['data']=$this->Model_admin->GetDataBarangKeluarOperator_view();	
		$this->load->view('tampilan_home',$data);
	}

}

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */ ?>