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
	public function ViewAdmin(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/admin/view_admin';
		$data['data']=$this->Model_admin->GetAdmin_View();	
		$this->load->view('tampilan_home',$data);
	}
	public function ViewOperator(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/operator/view_operator';	
		$this->load->view('tampilan_home',$data);
	}
	public function HapusAdmin($id){
		$hapus = $this->Model_admin->HapusAdmin($id);
		if($hapus==true){
			// $msg['succ_msg']="Admin Telah Terhapus";
			// $msg['scss_msg'] = "Success Delete Proker";
  			// $err_msg['msg'] = "Sorry your Data Failed t Update,..";
     //        $this->session->set_flashdata($err_msg);
     //        redirect($this->input->server('HTTP_REFERER',$err_msg)); 
			// die(var_dump($msg));

			$msg['msg'] = "Data Admin berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
            
		}else{
			$msg['msg2'] = "Data Gagal berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
			
			// redirect($this->input->server('HTTP_REFERER')); 
		}
	}
	public function EditAdmin($id){

	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
 ?>