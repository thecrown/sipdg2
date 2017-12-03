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
		$this->form_validation->set_rules('tahun', 'Kolom Tahun', 'trim|xss_clean|required');
		$this->form_validation->set_rules('bulan', 'Kolom bulan', 'trim|xss_clean|required');

		if ($this->form_validation->run()==false) {
				$msg['msg'] = "Pencarian Data Bulanan tidak Ditemukan";
	            $this->session->set_flashdata($msg);
				redirect($this->input->server('HTTP_REFERER'));
		} else {
				
		        $data['sidabar']='sidebar_admin';
				$data['main_view']='/barang/catatan_perbulan';
				$data['data']=$this->Model_barang->GetSaldoBarang_view();
				$this->load->view('tampilan_home',$data);
		}
	}
	public function CariDataBulanLPJ(){
		$this->form_validation->set_rules('tahun', 'Kolom Tahun', 'trim|xss_clean|required');
		$this->form_validation->set_rules('bulan', 'Kolom bulan', 'trim|xss_clean|required');

		if ($this->form_validation->run()==false) {
				$msg['msg'] = "Pencarian Data Bulanan tidak Ditemukan";
	            $this->session->set_flashdata($msg);
				redirect($this->input->server('HTTP_REFERER'));
		} else {
				
		        $data['sidabar']='sidebar_admin';
				$data['main_view']='/barang/LPJ_perbulan';
				$data['data']=$this->Model_barang->GetSaldoBarang_view();
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
	
	
	public function LaporanPertanggungJawaban()
	{
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/Laporan_PJ';
		$data['data']=$this->Model_barang->GetSaldoBarang_view();
		$this->load->view('tampilan_home',$data);

	}
	public function LaporanPertanggungJawabanPerbulan()
	{
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/Laporan_PJ_perbulan';
		$data['data']=$this->Model_barang->GetSaldoBarang_view();
		$this->load->view('tampilan_home',$data);

	}
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
	public function cetakkeluar()
	{
		$this->load->library('pdf_report');
		$data=$this->Model_admin->GetDataBarangKeluar_view();
		$this->load->view('admin/v_report_keluar',['data'=>$data]);		
	}
	public function cetakmasuk()
	{
		$this->load->library('pdf_report');
		$data=$this->Model_admin->GetDataBarangMasuk_view();
		$this->load->view('admin/v_report_masuk',['data'=>$data]);		
	}
	public function GantiPassAdmin($id)
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
	public function DaftarBarang(){
		$data['sidabar']='sidebar_admin';
		$data['main_view']='/barang/catatan_barang';
		$data['kode_barang']=$this->Model_admin->GetKode_View();
		$data['jenis_barang']=$this->Model_admin->GetJenis_View();	
		$data['data']=$this->Model_barang->GetDataBarangview();	
		$this->load->view('tampilan_home',$data);
	}
	public function HapusBarang($id){
		$hapus = $this->Model_barang->HapusBarang($id);
		if($hapus==true){
			$msg['msg'] = "Data Barang berhasil dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER')); 
		}else{
			$msg['msg2'] = "Data Barang Gagal dihapus";
            $this->session->set_flashdata($msg);
            redirect($this->input->server('HTTP_REFERER'));
		}
	}
	public function UpdateDataBarang($id){
	$this->form_validation->set_rules('nama','Nama Barang','trim|required|xss_clean|alpha_numeric_spaces');
	$this->form_validation->set_rules('kode','Satuan Barang','trim|required|xss_clean|alpha_numeric_spaces');
	$this->form_validation->set_rules('jenis','Jenis Barang','trim|required|xss_clean|alpha_numeric_spaces');
	$this->form_validation->set_rules('jumlah','Jumlah Barang','trim|required|xss_clean|is_natural');
	$this->form_validation->set_rules('harga','Harga Barang','trim|required|xss_clean|is_natural');
	
		if($this->form_validation->run()==false){
			$msg['msg2'] = validation_errors();
	        $this->session->set_flashdata($msg);
	        redirect($this->input->server('HTTP_REFERER'));
	
		}else{
	
			$hapus = $this->Model_barang->UpdateDataBarang($id);
			if($hapus==true){
				$msg['msg'] = "Data Barang berhasil diupdate";
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER')); 
			}else{
				$msg['msg2'] = "Data Barang Gagal diupdate";
	            $this->session->set_flashdata($msg);
	            redirect($this->input->server('HTTP_REFERER'));
			}
	
		}
			
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
