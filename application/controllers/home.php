<?php
	class Home extends CI_Controller
	{
		
		public $tampilan_home = 'tampilan_home';

		public function index()
		{
			
			$data['main_view'] = 'dashboard';
			$this->load->view($this->tampilan_home, $data);
		}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}

		
}
	