
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function TambahBarangMasuk(){
		$data = array(
			'nama_barang'=>strtolower($this->input->post('barang')),
			'kode_satuan'=>$this->input->post('kode'),
			'jenis_barang'=>$this->input->post('jenis'),
			'harga_barang'=>$this->input->post('harga')
		);

		$result = $this->db->get_where('barang',$data)->row();

		
		if(isset($result->nama_barang)==true){
			//jika harga lebih besar
			//update harganya dan stocknya
			//jika kurang maka update stock barangnya
			//insert barang masuk
			$stock = $result->stock + $this->input->post('stock');

				$datainput =array(
					'harga_barang'=>$this->input->post('harga'),
					'stock'=>$stock
				);
				$queryupdate = $this->db->update('barang',$datainput,$data);				

				$dataBarang = array(
					'kode_barang'=>$result->id_barang,
					'tanggal'=>$this->input->post('tanggal'),
					'nama_barang'=>strtolower($this->input->post('barang')),
					'kode_satuan'=>$this->input->post('kode'),
					'jenis_barang'=>$this->input->post('jenis'),
					'jumlah'=>$this->input->post('stock'),
					'lokasi'=>$this->input->post('lokasi')
				);
			$queryinsert = $this->db->insert('barang_masuk', $dataBarang);

		}else{
			//insert barang
			//ambil id_barang
			//insert barang_masuk

				$datainsertBarang = array(
					'kode_satuan'=>$this->input->post('kode'),
					'nama_barang'=>strtolower($this->input->post('barang')),
					'jenis_barang'=>$this->input->post('jenis'),
					'stock'=>$this->input->post('stock'),
					'harga_barang'=>$this->input->post('harga')
				);

			$querybarang = $this->db->insert('barang',$datainsertBarang);
			$getid = $this->db->get_where('barang',$data)->row();
				
				$dataBarangMasuk = array(
					'kode_barang'=>$getid->id_barang,
					'tanggal'=>$this->input->post('tanggal'),
					'nama_barang'=>strtolower($this->input->post('barang')),
					'kode_satuan'=>$this->input->post('kode'),
					'jenis_barang'=>$this->input->post('jenis'),
					'jumlah'=>$this->input->post('stock'),
					'lokasi'=>$this->input->post('lokasi')
				);
			$querybarangmasuk = $this->db->insert('barang_masuk', $dataBarangMasuk);
			
		}
			if($querybarangmasuk && $querybarang)
			{
				return true;
			}elseif($queryupdate && $queryinsert){
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
			'id_barang'=>$row->kode_barang
		);
		$dikurangi = $this->db->get_where('barang', $dicari)->row();
			$this->db->select('SUM(a.jumlah) as jumlah');
			$this->db->from('barang_keluar a');
	    	$this->db->where('kode_barang', $row->kode_barang);
	    	$jumlahbarangkeluar = $this->db->get()->row();
		if($dikurangi->stock<$jumlahbarangkeluar->jumlah){
			return false;
		}else{
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
	}
	public function UpdateCatatBarangMasuk($id){
		$where = array(
			'id_masuk'=>$id
		);

		$getdata = $this->db->get_where('barang_masuk',$where)->row();
		
		$getBarangLama = array(
			'id_barang'=>$getdata->kode_barang,
		);

		$getdatalama = $this->db->get_where('barang',$getBarangLama)->row();
		if($getdatalama->nama_barang==$this->input->post('nama') && $getdatalama->kode_satuan == $this->input->post('kode') && $getdatalama->jenis_barang == $this->input->post('jenis')){
			//update barang $getdataLama = data dari barang, $getdata = data dari barang masuk
			$stocklama = $getdatalama->stock - $getdata->jumlah;
			$stockbaru = $stocklama + $this->input->post('jumlah');
			
			if($stockbaru<0){
				return false;
			}else{
				$where =array(
				'id_masuk'=>$id
				);
			
			$datamasukbaru = array(
				'kode_barang'=>$getdatalama->id_barang,
				'tanggal'=>$this->input->post('tanggal'),
				'nama_barang'=>strtolower($this->input->post('nama')),
				'kode_satuan'=>$this->input->post('kode'),
				'jenis_barang'=>$this->input->post('jenis'),
				'jumlah'=>$this->input->post('jumlah'),
				'lokasi'=>$this->input->post('lokasi')
				);

			$updatebarangmasuk = $this->db->update('barang_masuk', $datamasukbaru, $where);
			
			if($getdatalama->harga_barang<$this->input->post('harga')){
				
				$where3 = array(
					'id_barang'=>$getdatalama->id_barang
				);

				$databarangbaru = array(
					'kode_satuan'=>$this->input->post('kode'),
					'nama_barang'=>strtolower($this->input->post('nama')),
					'jenis_barang'=>$this->input->post('jenis'),
					'stock'=>$stockbaru,
					'harga_barang'=>$this->input->post('harga')
				);

				$updatebarang = $this->db->update('barang', $databarangbaru,$where3);

				}else{

				$where2 = array(
					'id_barang'=>$getdatalama->id_barang
				);
					$databarangbaru = array(
						'kode_satuan'=>$this->input->post('kode'),
						'nama_barang'=>strtolower($this->input->post('nama')),
						'jenis_barang'=>$this->input->post('jenis'),
						'stock'=>$stockbaru,
						'harga_barang'=>$getdatalama->harga_barang
					);

					$updatebarang = $this->db->update('barang', $databarangbaru,$where2);
				}
			}

		}else{
			$datastock = $getdatalama->stock - $getdata->jumlah;
			
			if($datastock<0){
				return false;
			}else{
				$databarang = array(
				'stock'=>$datastock
			);

			$updatebarang = $this->db->update('barang', $databarang, $getBarangLama);
			$deletebarangmasuk = $this->db->delete('barang',$getBarangLama);
			$hapus = array(
				'id_masuk'=>$id
			);
			$deletebarangmasuk = $this->db->delete('barang_masuk',$hapus);
			
			$databarang = array(
			'nama_barang'=>strtolower($this->input->post('nama')),
			'kode_satuan'=>$this->input->post('kode'),
			'jenis_barang'=>$this->input->post('jenis')
			);

			$datainsertBarang = array(
					'kode_satuan'=>$this->input->post('kode'),
					'nama_barang'=>strtolower($this->input->post('nama')),
					'jenis_barang'=>$this->input->post('jenis'),
					'stock'=>$this->input->post('jumlah'),
					'harga_barang'=>$this->input->post('harga')
				);

			$querybarang = $this->db->insert('barang',$datainsertBarang);
			$getid = $this->db->get_where('barang',$databarang)->row();
			// die(var_dump($getid));
			//ini buat barang masuk
			
			$datainsert = array(
				'kode_barang'=>$getid->id_barang,
				'tanggal'=>$this->input->post('tanggal'),
				'nama_barang'=>$this->input->post('nama'),
				'kode_satuan'=>$this->input->post('kode'),
				'jenis_barang'=>$this->input->post('jenis'),
				'jumlah'=>$this->input->post('jumlah'),
				'lokasi'=>$this->input->post('lokasi')
			);

			$querybarangmasuk = $this->db->insert('barang_masuk', $datainsert);
			}
		}

		if($updatebarang==true && $updatebarangmasuk==true){
			return true;
		}else if($querybarangmasuk==true && $querybarang==true && $updatebarang==true){
			return true;
		}else{
			return false;
		}
	}
	public function TambahBarangKeluar($id){
		$where = array(
			'id_barang'=>$id
		);
		$getdata = $this->db->get_where('barang',$where)->row();
		if($getdata->stock<$this->input->post('jumlah')){
			return false;
		}else{
			$dataStockB = $getdata->stock-$this->input->post('jumlah');
				$databaru = array(
					'stock'=>$dataStockB
				);
			$updateStock = $this->db->update('barang', $databaru, $where);
				$dataKeluar = array(
					'tanggal' => $this->input->post('tanggal'),
					'kode_barang'=> $id,
					'jumlah' => $this->input->post('jumlah'),
					'penerima' => $this->input->post('penerima'),
					'lokasi' => $this->input->post('lokasi'),
					'id_user'=>$this->session->userdata('user_id')
				);
			$insertDataKeluar = $this->db->insert('barang_keluar', $dataKeluar);
			if($updateStock && $insertDataKeluar){
				return true;
			}else{
				return false;
			}
		}

	}

	public function HapusPencatatanBarangKeluar($id)
	{
		$where = array(
			'id_keluar'=>$id
		);
		$row = $this->db->get_where('barang_keluar', $where)->row();
		$dicari = array(
			'id_barang'=>$row->kode_barang
		);
		$ditambah = $this->db->get_where('barang', $dicari)->row();
		
		$stockB = $ditambah->stock+$row->jumlah;
		// die(var_dump($stockB));
			$dataB = array(
				'stock'=>$stockB
			);
		$inputB =  $this->db->update('barang', $dataB, $dicari);
		$deleteBM = $this->db->delete('barang_keluar',$where);
		if($inputB && $deleteBM){
			return true;
		}else{
			return false;
		}
	}
	public function UpdateCatatBarangKeluar($id)
	{
		$where = array(
			'id_keluar'=>$id
		);
		$getdata = $this->db->get_where('barang_keluar',$where)->row();
		$getBarangLama = array(
			'id_barang'=>$getdata->kode_barang
		);

		$getdatalama = $this->db->get_where('barang',$getBarangLama)->row();
		$StockAwal = $getdatalama->stock+$getdata->jumlah;
			$data = array(
				'stock'=>$StockAwal
			);
		
			if ($getdata->kode_barang!=$this->input->post('nama')) {
				
				$where2 = array(
				'id_barang'=>$this->input->post('nama')
				);
				$getdata = $this->db->get_where('barang',$where2)->row();
					if($getdata->stock<$this->input->post('jumlah')){
						return false;
					}else{
						$dataStockB = $getdata->stock-$this->input->post('jumlah');
							$databaru = array(
								'stock'=>$dataStockB
							);
						$updateStock = $this->db->update('barang', $databaru, $where2);
							$dataKeluar = array(
								'tanggal' => $this->input->post('tanggal'),
								'kode_barang'=> $getdata->id_barang,
								'jumlah' => $this->input->post('jumlah'),
								'penerima' => $this->input->post('penerima'),
								'lokasi'=>$this->input->post('lokasi')
							);
						$insertDataKeluar = $this->db->insert('barang_keluar', $dataKeluar);
						$deleteRecenlykeluar = $this->db->delete('barang_keluar',array('id_keluar'=>$id));
					}
			
			$updateBarang = $this->db->update('barang', $data, $getBarangLama);		
			} else {

			if($StockAwal<$this->input->post('jumlah')){
				return false;
			}else{

				$stockBaru = $StockAwal - $this->input->post('jumlah');
				$data2 = array(
					'stock'=>$stockBaru
				);
				$updateBarang = $this->db->update('barang', $data2, $getBarangLama);

					$dataUpdate = array(
					'tanggal'=>$this->input->post('tanggal'),
					'kode_barang'=> $this->input->post('nama'),
					'jumlah'=>$this->input->post('jumlah'),
					'penerima'=>$this->input->post('penerima'),
					'lokasi'=>$this->input->post('lokasi')
					);
				$updatePencatatanBarang = $this->db->update('barang_keluar', $dataUpdate, $where);
				}
			}
			
		if($updateBarang && $updatePencatatanBarang){
			return true;
		}else if($updateStock && $insertDataKeluar && $deleteRecenlykeluar && $updateBarang){
			return true;
		}else{
			return false;
		}
	}
	public function GetSaldoBarang_view()
	{

		$this->db->select('a.id_barang, c.jenis_barang,a.nama_barang,b.kode,a.stock,a.harga_barang');
		$this->db->from('barang a');
    	$this->db->join('satuan b', 'b.id_satuan=a.kode_satuan', 'inner'); 
    	$this->db->join('jenis_barang c', 'c.id_jenis=a.jenis_barang', 'inner');
    	
			return $this->db->get()->result();
	}
	public function getpenambahan($kode){
		$where = array(
			'kode_barang'=>$kode
		);
		$this->db->select('id_masuk, SUM(jumlah) as jumlah');
		$this->db->from('barang_masuk');
		$this->db->where($where);
	return $this->db->get()->row();	
	}
	public function getpenambahan2($kode){
		$where = array(
			'kode_barang'=>$kode,
			'MONTH(tanggal)'=>$this->input->post('bulan'),
            'YEAR(tanggal)'=>$this->input->post('tahun')
		);
		$this->db->select('id_masuk,SUM(jumlah) as jumlah');
		$this->db->from('barang_masuk');
		$this->db->where($where);
	return $this->db->get()->row();	
	}
	public function getpengurangan($kode){
		$where = array(
			'kode_barang'=>$kode
		);
		$this->db->select('id_keluar,SUM(jumlah) as jumlah');
		$this->db->from('barang_keluar');
		$this->db->where($where);
	return $this->db->get()->row();	
	}
	public function getpengurangan2($kode){
		$where = array(
			'kode_barang'=>$kode,
			'MONTH(tanggal)'=>$this->input->post('bulan'),
            'YEAR(tanggal)'=>$this->input->post('tahun')
		);
		$this->db->select('id_keluar,SUM(jumlah) as jumlah');
		$this->db->from('barang_keluar');
		$this->db->where($where);
	return $this->db->get()->row();	
	}
	//$ina = $key->kode_satuan; $inb = $key->jenis_barang; $inc=$key->nama_barang;
	public function getdataMasuk($where)
					
	{	
		$this->db->select_SUM('jumlah');
		$this->db->select('harga');			
		$this->db->group_by('nama_barang');
		// $return = $this->db->get_where('barang_masuk',$where)->row(); 
		return $this->db->get_where('barang_masuk',$where)->result(); 
		  // die(var_dump($return));
	}
	public function getdataKeluar($where2)
	{
		$this->db->select_SUM('jumlah');
		$this->db->select('harga');			
		$this->db->group_by('kode_barang');
		// $return = $this->db->get_where('barang_masuk',$where)->row(); 
		return $this->db->get_where('barang_keluar',$where2)->result(); 
		  // die(var_dump($return));
	}
	public function getdataMasukPerbulan($nambar,$jenba,$kosa){
		$where = array(
			'nama_barang'=>$nambar,
			'jenis_barang'=>$jenba,
            'kode_satuan'=> $kosa,
            'MONTH(tanggal)'=>$this->input->post('bulan'),
            'YEAR(tanggal)'=>$this->input->post('tahun')
		);
		$this->db->select_SUM('jumlah');
		$this->db->select('harga');			
		$this->db->group_by('nama_barang');
		return $this->db->get_where('barang_masuk',$where)->result(); 
	}
	public function getdataKeluarPerbulan($kobar)
	{
		$where2=array(
			'kode_barang' =>$kobar,
			'MONTH(tanggal)'=>$this->input->post('bulan'),
            'YEAR(tanggal)'=>$this->input->post('tahun')
		);
		$this->db->select_SUM('jumlah');
		$this->db->select('harga');			
		$this->db->group_by('kode_barang');
		// $return = $this->db->get_where('barang_masuk',$where)->row(); 
		return $this->db->get_where('barang_keluar',$where2)->result(); 
		  // die(var_dump($return));
	}
	public function countPersediaanBarang()
	{
		return $this->db->query('SELECT SUM(stock * harga_barang) as Total FROM barang')->row();
		
	}
	public function countPenambahanBarang()
	{
		return $this->db->query('SELECT SUM(jumlah * harga_barang) as Total FROM barang_masuk a INNER JOIN barang b ON a.kode_barang = b.id_barang')->row();
	}
	public function countPenguranganBarang()
	{
		return $this->db->query('SELECT SUM(jumlah * harga_barang) as Total FROM barang_keluar a INNER JOIN barang b ON a.kode_barang = b.id_barang')->row();
	}
	public function countPenambahanBarang2()
	{	
		$month = $this->input->post('bulan');
		$year = $this->input->post('tahun');
		

		return  $this->db->query("SELECT SUM(jumlah * harga_barang) as Total FROM barang_masuk a INNER JOIN barang b ON a.kode_barang = b.id_barang where MONTH(tanggal)='$month' && YEAR(tanggal)='$year'")->row();
		
	}
	public function countPenguranganBarang2()
	{
		$month = $this->input->post('bulan');
		$year = $this->input->post('tahun');

		return $this->db->query("SELECT SUM(jumlah * harga_barang) as Total FROM barang_keluar a INNER JOIN barang b ON a.kode_barang = b.id_barang  where MONTH(tanggal)='$month' && YEAR(tanggal)='$year'")->row();
	}
	public function countPersediaanAkhirBarang()
	{
		return $this->db->query('SELECT SUM(stock * harga_barang) as Total FROM barang')->row();
	}
	public function GetDataBarangview()
	{
		$this->db->select('a.id_barang, b.kode, a.nama_barang, c.jenis_barang, a.stock, a.harga_barang');
		$this->db->join('satuan b', 'b.id_satuan = a.kode_satuan', 'left');
		$this->db->join('jenis_barang c', 'a.jenis_barang = c.id_jenis', 'left');
		$this->db->from('barang a');
		return $this->db->get()->result();
	}
	public function HapusBarang($id)
	{
		$where = array(
			'id_barang'=>$id
		);
		$where2 = array (
			'kode_barang'=>$id
		);
		$delBM = $this->db->delete('barang_masuk',$where2);
		$delBK = $this->db->delete('barang_keluar',$where2);
		$delB = $this->db->delete('barang',$where);
		if($delBM || $delB|| $delBK){
			return true;
		}else{
			return false;
		}
	}
	public function UpdateDataBarang($id)
	{	
		$where = array(
			'id_barang' => $id 
		);

		$data = array(
			'kode_satuan' => $this->input->post('kode'),
			'nama_barang' => strtolower($this->input->post('nama')), 
			'jenis_barang' => $this->input->post('jenis'),
			'stock' => $this->input->post('jumlah'),
			'harga_barang' => $this->input->post('harga')
		);
		
		$updateBarang = $this->db->update('barang', $data, $where);

		$where2 =array(
			'kode_barang' => $id
		);

		$data2 = array(
			'nama_barang' => strtolower($this->input->post('nama')), 
			'kode_satuan' => $this->input->post('kode'),
			'jenis_barang' => $this->input->post('jenis')
		);

		$updateBarang2 = $this->db->update('barang_masuk', $data2, $where2);

		if($updateBarang || $updateBarang2 ){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */