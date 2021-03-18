<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_app');
	}

    public function Index(){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $this->load->view('admin/login_view', $data);
    }

	public function Action(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() !=false) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$where = [
				'email' 	=> $email,
				'password' 	=> md5($password),
				'is_active'	=> 1
			];

			$this->load->model('Model_app');
			$cek = $this->Model_app->cek_login('user',$where)->num_rows();
			if($cek > 0) {
				$data = $this->Model_app->cek_login('user',$where)->row();
				$data_session = array(
					'uid'		=> $data->uid,
					'username'	=> $data->username,
					'name'		=> $data->name,
					'level'		=> $data->level,
					'address'	=> $data->address,
					'email'		=> $data->email,
					'phone'		=> $data->phone,
					'status' 	=> 'telah_login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url().'Admin/Dashboard');
			} else {
				redirect(base_url().'Admin/Login?alert=gagal');
			}
		} else {
			$data['config']	= $this->Model_app->get_data('config_info')->row();
			$this->load->view('admin/login_view', $data);
		}
	}
	
	public function Logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Admin/Login?alert=logout');
	}
}

?>