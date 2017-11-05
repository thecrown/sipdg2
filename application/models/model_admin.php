<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_admin extends CI_Model {
		##################################################################################################################
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
		##################################################################################################################
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
#####################################################################Barang#####################################################	
		public function GetKode_View(){
			return $this->db->get('satuan')->result();
		}
		public function GetJenis_View(){
			return $this->db->get('jenis_barang')->result();
		}
		public function GetDataBarangMasuk_view(){
			 		$this->db->select('*');
			 		$this->db->from('barang_masuk a');
			 		$this->db->join('jenis_barang b', 'b.id_jenis=a.jenis_barang', 'left');
    				$this->db->join('satuan c', 'c.id_satuan=a.kode_satuan', 'left'); 
			return $this->db->get()->result();
		}	
	}
	
	
 ?>