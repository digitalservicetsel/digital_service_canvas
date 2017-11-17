<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('auth_model');
	}
	
	function index()
	{
		if(!$this->session->userdata('logged_in'))
		{
			$this->load->view('login');
		}
		else
		{
			redirect('home');
		}		
	}
	
	function login()
	{
		#$this->form_validation->set_error_delimiters('', '<br>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		
		#$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		#$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		if($this->form_validation->run()==false){
		
			$this->session->set_flashdata('alert', validation_errors());
			redirect('auth');
		} else {
			$login_data = $this->auth_model->check_data();
			
			if($login_data)
			{
				$this->session->set_userdata($login_data);
				#$this->session->set_flashdata('alert', 'Berhasil! Selamat datang '.$this->session->userdata('name').'.');
				redirect('home');
			}
			else
			{
				$this->session->set_flashdata('alert', 'Opps! username atau password salah.');
				redirect('auth');
			}
		}
		
		
	}
	
	function logout()
	{
		$this->session->unset_userdata(logged_in);
		$this->session->set_flashdata('alert', 'Berhasil! Anda telah logout.');
		redirect('auth');
	}
	
	function forgot(){
		$data ['content'] = $this->load->view('forgot_password','',TRUE);
		$this->load->view('template', $data);
  }
}