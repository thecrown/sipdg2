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
	public function BarangKeluar(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/barang_keluar';	
		$this->load->view('tampilan_home',$data);
	}

	public function BarangMasuk(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/barang_masuk';	
		$this->load->view('tampilan_home',$data);
	}
	public function ViewAdmin(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/admin/view_admin';	
		$this->load->view('tampilan_home',$data);
	}
	public function ViewOperator(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/operator/view_operator';	
		$this->load->view('tampilan_home',$data);
	}
	public function CatatanBarangKeluar(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_barang_keluar';	
		$this->load->view('tampilan_home',$data);
	}
	public function CatatanBarangMasuk(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_barang_masuk';	
		$this->load->view('tampilan_home',$data);	
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
 ?>