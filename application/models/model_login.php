<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {
	

	public function getLogin()
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>md5(md5($this->input->post('password')))
		);
		$query = $this->db->get_where('admin',$data);
		if($query->num_rows()>0){
			$datas = array(
				'user_id'=>$query->row(0)->id_admin,
				'username'=>$query->row(0)->username,
				'nama_lengkap'=>$query->row(0)->nama_lengkap,
				'role'=>$query->row(0)->role
			);
			$this->session->set_userdata($data);
			return $this->session->userdata('role');
		}else{
			return false;
		}

			
		#$query = $this->db->get('admin');
	
	#if ($query->num_rows >0) {
				#return true;
			#}	
	}

	function get_db_session_data()
		{
			$query = $this->db->select('user_data')->get('ci_sessions');
			$user = array();
			foreach ($query->result() as $row) {
				$udata = unserialize($row->user_data);
				$user['username'] = $udata['username'];
				$user['is_admin'] = $udata['is_admin'];
			}
			return $user;
		}
}
