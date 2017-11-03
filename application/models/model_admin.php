<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_admin extends CI_Model {
	
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
	
	}
	
	
 ?>