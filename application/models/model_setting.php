<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_setting extends CI_model {
	public function getCurrPassword($username)
	{
		$query = $this->db->where(['username=>$username'])->get('admin');
		if($query->num_rows()>0)
		{
			return $query->row();
		}
	}

	public function updatePassword($new_password, $username){
		$data = array('password'=> $new_password);
		return $this->db->where('username', $username)->update('admin', $data);
	}
}
