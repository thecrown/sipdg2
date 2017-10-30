<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
		$this->model_sequrity->getsequrity();
		$isi['content']		= 'setting/tampil_setting';
		$isi['judul']		= 'DASHBOARD';
		$isi['sub_judul']	= 'Setting';
		$this->load->view('tampilan_home',$isi);
	}

	public function updatePwd(){
		$this->form_validation->set_rules('password', 'Current Password', 'required|alpha_numeric|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('newpassword', 'New Password', 'required|alpha_numeric|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('confpassword', 'Confirm Password', 'required|alpha_numeric|min_length[5]|max_length[20]');
		if($this->form_validation->run()){
			$curr_password = $this->input->post('password');
			$new_password = $this->input->post('newpassword');
			$conf_password = $this->input->post('confpassword');
			$this->load->model('model_setting');
			$username = 'admin';
			$passwd = $this->model_setting->getCurrPassword($username);
			if($passwd->password == $curr_password){
				if($new_password == $conf_password){
					if($this->model_setting->updatePassword($new_password, $username)){
					   $this->session->set_flashdata('info', 'Berhasil mengganti password');
					}
					else{
						$this->session->set_flashdata('info', 'gagal mengganti password.');
					}
				}
				else{
					$this->session->set_flashdata('info', 'password baru & konfirmasi password tidak cocok.');
				}
			}
			else{
				$this->session->set_flashdata('info', 'Maaf! Password lama tidak cocok.');
			}
			redirect('setting');
		}
		else{
			redirect('setting');
		}
	}
}
