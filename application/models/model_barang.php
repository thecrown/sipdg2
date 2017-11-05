
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function TambahBarangMasuk(){
		$data = array(
			'tanggal'=>$this->input->post('tanggal'),
			'nama_barang'=>strtolower($this->input->post('barang')),
			'kode_satuan'=>$this->input->post('kode'),
			'jenis_barang'=>$this->input->post('jenis'),
			'jumlah'=>$this->input->post('stock'),
			'harga'=>$this->input->post('harga')
		);
		$query = $this->db->insert('barang_masuk', $data);
			$where = array(
				'kode_satuan'=>$this->input->post('kode'),
				'nama_barang'=>strtolower($this->input->post('barang')),
				'jenis_barang'=>$this->input->post('jenis')
			);
		$input = $this->db->get_where('barang', $where);

			if($input->num_rows()<=0){
				$databarang = array(
					'nama_barang'=>strtolower($this->input->post('barang')),
					'kode_satuan'=>$this->input->post('kode'),
					'jenis_barang'=>$this->input->post('jenis'),
					'stock'=>$this->input->post('stock'),
					'harga_barang'=>$this->input->post('harga')
				);
				$adding=$this->db->insert('barang', $databarang);
			}else{
				$whereBB = array(
				'kode_satuan'=>$this->input->post('kode'),
				'nama_barang'=>strtolower($this->input->post('barang')),
				'jenis_barang'=>$this->input->post('jenis')
				);

				$row = $this->db->get_where('barang',$where)->row();
				
				$dataSB = $row->stock+$this->input->post('stock');
				$dataBB = array(
					'nama_barang'=>strtolower($this->input->post('barang')),
					'kode_satuan'=>$this->input->post('kode'),
					'jenis_barang'=>$this->input->post('jenis'),
					'stock'=>$dataSB,
					'harga_barang'=>$this->input->post('harga')
				);
				$update = $this->db->update('barang', $dataBB, $whereBB);
			}
			if($query && $adding)
			{
				return true;
			}elseif($query && $update){
				return true;
			}else{
				return false;
			}
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */