<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['sidabar']='sidebar_admin';
		$data['main_view']='dashboard';
		
		$this->load->view('tampilan_home',$data);		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
 ?>