<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_model {

	public function __construct()
		{
			$this->load->database();
		}

	public function get_admin_by_id($id_admin)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('id_admin', $id_admin);
			$query = $this->db->get();
			return $query->result_array();
		}

	public function store_admin($data)
		{
			$insert = $this->db->insert('admin', $data);
			return $insert;
		}

		public function update_admin($id_admin, $data)
		{
			$this->db->where('id_admin', $id_admin);
			$this->db->update('admin', $data);
			$report = array();
			$report['error'] = $this->db->_error_number();
			$report['message'] = $this->db->_error_message();
			if ($report !== 0) {
				return true;
			} else {
				return false;
			}
		}

		public function update_admin2($username, $data)
		{
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('admin', $data);
			$report = array();
			$report['error'] = $this->db->_error_number();
			$report['message'] = $this->db->_error_message();
			if ($report !== 0) {
				return true;
			} else {
				return false;
			}
		}

		public function get_admin($username)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username', $this->session->userdata('username'));
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_admin2()
		{
			$this->db->select('*');
			$this->db->from('admin');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function edit_pass($username, $data)
		{
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('admin', $data);
			$report = array();
			$report['error'] = $this->db->_error_number();
			$report['message'] = $this->db->_error_message();
			if ($report !== 0) {
				return true;
			} else {
				return false;
			}
		}

		public function delete_admin($id_admin)
		{
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('admin');
		}
	}

