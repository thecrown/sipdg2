<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role')!="admin"){
			redirect ('operator');
		}
	}
	public function index()
	{
		$data['sidabar']='sidebar_admin';
		$data['main_view']='dashboard';	
		$this->load->view('tampilan_home',$data);		
	}
	public function View_profile(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/admin/profile_admin';	
		$this->load->view('tampilan_home',$data);	
	}
	public function BarangKeluar(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/barang_keluar';
		$data['kode']=$this->Model_admin->GetKode_View();
		$data['jenis']=$this->Model_admin->GetJenis_View();
		$data['barang']=$this->Model_admin->GetBarang_View();	
		$this->load->view('tampilan_home',$data);
	}

	public function BarangMasuk(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/barang_masuk';
		$data['kode']=$this->Model_admin->GetKode_View();
		$data['jenis']=$this->Model_admin->GetJenis_View();
		$this->load->view('tampilan_home',$data);
	}
	
	public function CatatanBarangKeluar(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_barang_keluar';	
		$data['nama']=$this->Model_admin->GetBarang_View();
		$data['data']=$this->Model_admin->GetDataBarangKeluar_view();	
		$this->load->view('tampilan_home',$data);
	}
	public function CatatanBarangMasuk(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_barang_masuk';
		$data['kode']=$this->Model_admin->GetKode_View();
		$data['jenis']=$this->Model_admin->GetJenis_View();
		$data['data']=$this->Model_admin->GetDataBarangMasuk_view();	
		$this->load->view('tampilan_home',$data);	
	}
	public function ViewSaldoBulanan()
	{
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_bulanan';
		// $data['kode']=$this->Model_admin->GetKode_View();
		// $data['jenis']=$this->Model_admin->GetJenis_View();
		$data['data']=$this->Model_barang->GetSaldoBarang_view();

		$this->load->view('tampilan_home',$data);
	}
	public function CariDataBulan(){
		$cari = $this->Model_barang->CariDataBulan($id);
		if($cari==true){
			$msg['msg'] = "Data Pencatatan Barang berhasil dihapus";
            $this->session->set_flashdata($msg);

	            $data['sidabar']='sidebar_admin';
				$data['main_view']='/barang/catatan_bulanan';
				// $data['kode']=$this->Model_admin->GetKode_View();
				// $data['jenis']=$this->Model_admin->GetJenis_View();
				// $data['data']=$this->Model_admin->GetDataBarangMasuk_view();	
				$this->load->view('tampilan_home',$data);

		}else{

			$msg['msg2'] = "Data Pencatatan Barang Gagal dihapus";
            $this->session->set_flashdata($msg);

            	$data['sidabar']='sidebar_admin';
				$data['main_view']='/barang/catatan_bulanan';
				// $data['kode']=$this->Model_admin->GetKode_View();
				// $data['jenis']=$this->Model_admin->GetJenis_View();
				// $data['data']=$this->Model_admin->GetDataBarangMasuk_view();	
				$this->load->view('tampilan_home',$data);
            
		}
	}
	##########################################################ADMIN###########################################################
	public function ViewAdmin(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/admin/view_admin';
		$data['data']=$this->Model_admin->GetAdmin_View();	
		$this->load->view('tampilan_home',$data);
	}
	public function HapusAdmin($id){
		$hapus = $this->Model_admin->HapusAdmin($id);
		if($hapus==true){
			$msg['msg'] = "Data Admin berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		}else{
			$msg['msg2'] = "Data Gagal berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
		}
	}
	########################################################END ADMIN###########################################################
	########################################################Operator###########################################################
	public function ViewOperator(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/operator/view_operator';	
		$data['data']=$this->Model_admin->GetOperator_View();	
		$this->load->view('tampilan_home',$data);
	}
	
	public function HapusOperator($id){
		$hapus = $this->Model_admin->HapusOperator($id);
		if($hapus==true){
			$msg['msg'] = "Data Operator berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		}else{
			$msg['msg2'] = "Data Gagal berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
		}
	}
	########################################################End Operator###########################################################
	#######################################################Barang ############################################################
	public function HapusPencatatanBarang($id)
	{
		$hapus = $this->Model_barang->HapusPencatatanBarang($id);
		if($hapus==true){
			$msg['msg'] = "Data Pencatatan Barang berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		}else{
			$msg['msg2'] = "Data Pencatatan Barang Gagal dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
		}
	}
	public function HapusPencatatanBarangKeluar($id)
	{
		$hapus = $this->Model_barang->HapusPencatatanBarangKeluar($id);
		if($hapus==true){
			$msg['msg'] = "Data Pencatatan Barang berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		}else{
			$msg['msg2'] = "Data Pencatatan Barang Gagal dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
