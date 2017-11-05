
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
	public function HapusPencatatanBarang($id)
	{
		$where = array(
			'id_masuk'=>$id
		);
		$row = $this->db->get_where('barang_masuk', $where)->row();
		$dicari = array(
			'kode_satuan'=>$row->kode_satuan,
			'nama_barang'=>$row->nama_barang,
			'jenis_barang'=>$row->jenis_barang
		);
		$dikurangi = $this->db->get_where('barang', $dicari)->row();
		
		$stockB = $dikurangi->stock-$row->jumlah;
		// die(var_dump($stockB));
			$dataB = array(
				'stock'=>$stockB
			);
		$inputB =  $this->db->update('barang', $dataB, $dicari);
		$deleteBM = $this->db->delete('barang_masuk',$where);
		if($inputB && $deleteBM){
			return true;
		}else{
			return false;
		}
	}
	public function UpdateCatatBarangMasuk($id){
		$where = array(
			'id_masuk'=>$id
		);
		$getdata = $this->db->get_where('barang_masuk',$where)->row();
		
		$getBarangLama = array(
			'kode_satuan'=>$getdata->kode_satuan,
			'jenis_barang'=>$getdata->jenis_barang,
			'nama_barang'=>$getdata->nama_barang
		);
		$getdatalama = $this->db->get_where('barang',$getBarangLama)->row();

		$StockAwal = $getdatalama->stock-$getdata->jumlah;
			
			$data = array(
				'stock'=>$StockAwal + $this->input->post('jumlah')
			);

		$updateBarang = $this->db->update('barang', $data, $getBarangLama);
			$dataUpdate = array(
				'tanggal'=>$this->input->post('tanggal'),
				'nama_barang'=>$this->input->post('nama'),
				'kode_satuan'=>$this->input->post('kode'),
				'jenis_barang'=>$this->input->post('jenis'),
				'jumlah'=>$this->input->post('jumlah'),
				'harga'=>$this->input->post('harga')
			);

		$updatePencatatanBarang = $this->db->update('barang_masuk', $dataUpdate, $where);
		if($updateBarang && $updatePencatatanBarang){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */