<?php
	class barangmasuk_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function store_barangmasuk($data)
		{
			$insert = $this->db->insert('barang_masuk', $data);
			return $insert;
		}

		public function count_barangmasuk2()
		{
			
			$this->db->select('id_masuk');
			$this->db->select('tanggal');
			$this->db->select('kode_satuan');
			$this->db->select('tanggal');
			$this->db->select('jumlah');
			$this->db->select('harga');
			$this->db->select('total_harga');
			$this->db->from('barang_masuk');

			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_barangmasuk()
		{
			$this->db->select('id_masuk');
			$this->db->select('tanggal');
			$this->db->select('kode_satuan');
			$this->db->select('tanggal');
			$this->db->select('jumlah');
			$this->db->select('harga');
			$this->db->select('total_harga');
			$this->db->from('barang_masuk');
			
			$query = $this->db->get();
			return $query->result_array();
		}

		public function update_barangmasuk($id_masuk, $data)
		{
			$this->db->where('id_masuk', $id_masuk);
			$this->db->update('barang_masuk', $data);
			$report = array();
			$report['error'] = $this->db->_error_number();
			$report['message'] = $this->db->_error_message();
			if ($report !== 0 ) {
				return true;
			} else {
				return false;
			}
		}

		public function update_barangmasuk2($id_masuk, $data)
		{
			$this->db->where('id_masuk', $this->session->userdata('id_masuk'));
			$this->db->update('barang_masuk', $data);
			$report = array();
			$report['error'] = $this->db->_error_number();
			$report['message'] = $this->db->_error_message();
			if ($report !== 0 ) {
				return true;
			} else {
				return false;
			}
		}

		public function delete_barangmasuk($id_masuk)
		{
			$this->db->where('id_masuk', $id_masuk);
			$this->db->delete('barang_masuk');
		}

		public function delete_bimbingan2($id_masuk)
		{
			$this->db->where('id_masuk', $id_masuk);
			$this->db->delete('barang_masuk');
		}

		public function count_barangmasuk()
		{
			$this->db->select('*');
			$this->db->from('barang_masuk');
			$query = $this->db->get();
			return $query->num_rows();
		}
	}