<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->user_id==true){
			redirect('operator');
		}
		$this->load->model('model_login');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('login');
		
	}

	public function verifLogin(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if($this->form_validation->run()==false)
		{
			$message['err_msg']='Username and Password May Wrong';
			$this->session->set_flashdata($message);
			redirect($this->input->server('HTTP_REFERER'));
		}else{
			$login = $this->model_login->getLogin();
			if($login==="admin")
			{
				// echo var_dump($login);
				redirect('admin');
				// echo "ini admin";
			}else if($login==="operator"){
				// echo var_dump($login);
				redirect('operator');
				//echo "ini operator";
			}else{
				$message['err_msg']='Username and Password May Wrong';
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}
		}
	}
	public function logoutSession(){
		$this->model_login->destroySession();
		redirect('login');
	}
	// public function __encrip_password($password)
	// 	{
	// 		 
	// 	}


	// public function getlogin()
	// {
	// 	$this->load->model('model_login');

	// 	$u = $this->input->post('username');
	// 	$p = $this->__encrip_password($this->input->post('password'));

	// 	$is_valid = $this->model_login->getlogin($u, $p);
	// 		if ($is_valid) {
	// 			$data = array (
	// 					'username' => $u,
	// 					'is_admin' => true
	// 				);
	// 			$this->session->set_userdata($data);
	// 			$data['main_view'] = 'dashboard';

	// 		$this->load->view('tampilan_home', $data);
	// 		} else {
	// 			$data['message_error'] = TRUE;
	// 			$this->load->view('tampilan_login', $data);
	// 		}
	// }

	public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}

}
