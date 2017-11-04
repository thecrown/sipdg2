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
				'password'=>md5(md5($this->input->post('password')))
			);
			$where = array(
				'id_admin'=>$id
			);
			return $this->db->update('admin',$data,$where);
		}
		##################################################################################################################
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
				'password'=>md5(md5($this->input->post('password')))
			);
			$where = array(
				'id_admin'=>$id
			);
			return $this->db->update('admin',$data,$where);
		} 	
	
	}
	
	
 ?>