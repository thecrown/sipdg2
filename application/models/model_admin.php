<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_admin extends CI_Model {
##################################################################################################
		public function GetAdmin_View(){
			$where =array(
				'role'=>"admin"
			);
			return $this->db->get_where('admin', $where)->result();
		}
		
		public function HapusAdmin($id){
			$where = array(
				'id_admin'=>$id
			);
			$query =  $this->db->delete('admin',$where);
			if($query==true){return true;}else{return false;}
		}
		public function EditAdmin_Get($id){
			$where=array(
				'id_admin'=>$id
			);
			return $this->db->get('admin',$where)->row();	
		}
		public function UpdateAdmin($id){
			$data = array(
				'username'=>$this->input->post('username'),
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'no_telephone'=>$this->input->post('no_telephone'),
				'password'=>md5(md5($this->input->post('Password')))
			);
			$where = array(
				'id_admin'=>$id
			);
			return $this->db->update('admin',$data,$where);
		}
		public function AddAdmin(){
			$data = array(
				'username'=>$this->input->post('username'),
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'no_telephone'=>$this->input->post('no_telephone'),
				'password'=>md5(md5($this->input->post('Password'))),
				'role'=>"admin"
			);
			return $this->db->insert('admin',$data);
		}
##################################################################################################
		public function AddOperator()
		{
			$data = array(
				'username'=>$this->input->post('username'),
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'no_telephone'=>$this->input->post('no_telephone'),
				'password'=>md5(md5($this->input->post('Password'))),
				'role'=>"operator"
			);
			return $this->db->insert('admin',$data);
		}
		public function GetOperator_View(){
			$where =array(
				'role'=>"operator"
			);
			return $this->db->get_where('admin', $where)->result();
		}
		public function HapusOperator($id){
			$where = array(
				'id_admin'=>$id
			);
			$query =  $this->db->delete('admin',$where);
			if($query==true){return true;}else{return false;}
		}
		public function UpdateOperator($id){
			$data = array(
				'username'=>$this->input->post('username'),
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'no_telephone'=>$this->input->post('no_telephone'),
				'password'=>md5(md5($this->input->post('Password')))
			);
			$where = array(
				'id_admin'=>$id
			);
			return $this->db->update('admin',$data,$where);
		} 
#####################################################################Barang#######################
		public function GetKode_View(){
			return $this->db->get('satuan')->result();
		}
		public function GetJenis_View(){
			return $this->db->get('jenis_barang')->result();
		}
		public function GetBarang_View()
		{
			return $this->db->get('barang')->result();
		}
		public function GetBarang_ViewOP()
		{
			return $this->db->query('SELECT * FROM `barang` WHERE stock >0 ')->result();
		}
		public function GetDataBarangMasuk_view(){
			 		
			return $this->db->get('view_barang_masuk')->result();
		}
		public function GetBarang($id){
			return $this->db->get_where('join_barang_jenis_satuan',$where = array('id_barang'=>$id))->result();
		}
		public function GetDataBarangKeluar_view(){
					$this->db->select('*');
			 		$this->db->from('barang a');
    				$this->db->join('satuan b', 'b.id_satuan=a.kode_satuan', 'inner'); 
    				$this->db->join('jenis_barang c', 'c.id_jenis=a.jenis_barang', 'inner');
    				$this->db->join('barang_keluar d', 'd.kode_barang=a.id_barang', 'inner'); 
			return $this->db->get()->result();
		}
		public function GetDataBarangKeluarOperator_view(){
					$where =array(
						'id_user'=>$this->session->userdata('user_id')
					);
			return $this->db->get_where('view_barang_keluar',$where)->result();
		}
		public function UpdatePassword($id)
			{
				$data = array(
					'password'=>md5(md5($this->input->post('password')))
				);
				$where = array(
					'id_admin'=>$id,
					'role'=>$this->input->post('role')
				);
				$update = $this->db->update('admin',$data,$where);
				if($update==true){
					return true;
				}else{
					return false;
				}
			}	
	}
	
	
