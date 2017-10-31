<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function index()
	{
		$data['sidabar']='sidebar_operator';
		$data['main_view']='dashboard';
		
		$this->load->view('tampilan_home',$data);
	}

}

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */ ?>