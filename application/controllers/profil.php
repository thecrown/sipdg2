<?php
class Profil extends CI_Controller {

	const VIEW_FOLDER = 'profil';
	public $tampilan_home = 'tampilan_home';

	public function __construct()
		{
			parent::__construct();
			$this->load->model('model_profil');
			if (! $this->session->userdata('is_admin')) {
				redirect('tampilan_login');
			}
		}
	
	public function __encrip_password($password) 
		{
			return md5($password);
		}

	public function index()
		{
			$data['admin'] = $this->model_profil->get_admin2();
			$data['main_view'] = 'profil/list';
			$this->load->view($this->tampilan_home, $data);
		}


	public function edit_password()
		{
			//if save button was clicked, get the data sent via post
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->form_validation->set_rules('password', 'password', 'trim|required|max_length[32]');
				$this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>', '</strong></div>');

				//if the form has passed through the validation
				if ($this->form_validation->run()) {
					$data_to_store = array(
						'password' => $this->__encrip_password($this->input->post('password'))
					);
					//if the insert data returned true when we show the flash message
					if ($this->model_profil->update_admin2($this->session->userdata('username'), $data_to_store) == TRUE) {
						$this->session->set_flashdata('flash_message', 'Updated');
					} else {
						$this->session->set_flashdata('flash_message', 'Not_updated');
					}
					redirect('profil/edit_password');
				}
			}
			$data['admin'] = $this->model_profil->get_admin($this->session->userdata('username'));
			$data['main_view'] = 'profil/edit_password';
			$this->load->view($this->tampilan_home, $data);
		}

		public function edit()
		{
			$id_admin = $this->uri->segment(4);

			//if save button was clicked, get the data sent via post
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->form_validation->set_rules('username', 'username', 'trim|required|exact_length[18]');
				$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
				//$this->form_validation->set_rules('password', 'password', 'trim|required');
				$this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>', '</strong></div>');

				//if the form has passed through the validation
				if ($this->form_validation->run()) {
					$data_to_store = array(
						'username' => $this->input->post('username'),
						'nama_lengkap' => $this->input->post('nama_lengkap')
					);
					//if the insert data returned true when we show the flash message
					if ($this->admin_model->update_admin($id_admin, $data_to_store) == TRUE) {
						$this->session->set_flashdata('flash_message', 'Updated');
					} else {
						$this->session->set_flashdata('flash_message', 'Not_updated');
					}
					redirect('profil/edit/'.$id_admin);
				}
			}
			$data['admin'] = $this->model_profil->get_admin_by_id($id_admin);
			$data['main_view'] = 'profil/edit';
			$this->load->view($this->tampilan_home, $data);
		}

		public function tambah()
		{
			//if save button clicked, get the data sent via post
			if ($this->input->server('REQUEST_METHOD') === 'POST') {
				//form validation
				$this->form_validation->set_rules('username', 'username', 'trim|required|exact_length[18]');
				$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
				$this->form_validation->set_rules('password', 'password', 'trim|required|max_length[32]');
				$this->form_validation->set_rules('passconf', 'passconf', 'trim|required|matches[password]');
				$this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>', '</strong></div>');

				//if the form has passed through the validation
				if ($this->form_validation->run()) {
					$data_to_store = array(
						'username' => $this->input->post('username'),
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'password' => $this->__encrip_password($this->input->post('password'))
					);
					//if the insert has returned true then we show the flash message
					if ($this->admin_model->store_admin($data_to_store)) {
						$data['flash_message'] = TRUE;
					} else {
						$data['flash_message'] = FALSE;
					}
				}
			}
			$data['main_view'] = 'profil/tambah';
			$this->load->view($this->tampilan_home, $data);
		}

		public function tampilan_profil()
		{
			$data['admin'] = $this->model_profil->get_admin($this->session->userdata('username'));
			$data['main_view'] = 'profil/tampilan_profil';
			$this->load->view($this->tampilan_home, $data);
		}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('tampilan_login');
	}
}
