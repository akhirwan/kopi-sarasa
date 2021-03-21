<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'author?alert=belum_login');
		}
		$this->load->model('Model_app');
	}

    public function Index() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();
		$data['title'] = 'Dashboard';

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/index', $data);
		$this->load->view('admin/template/footer');
    }

    public function Config() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();
		$data['title'] = 'Dashboard';

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/web_info', $data);
		$this->load->view('admin/template/footer');
    }

	public function Update() {
		$this->form_validation->set_rules('app_name','Nama Website','required');

		if($this->form_validation->run()!=false){
			$where = [];
			$data = [
				'app_name' 	=> $this->input->post('app_name'),
				'company' 	=> $this->input->post('company'),
				'phone1' 	=> $this->input->post('phone1'),
				'phone2' 	=> $this->input->post('phone2'),
				'address' 	=> $this->input->post('address'),
				'email' 	=> $this->input->post('email'),
				'link_fb' 	=> $this->input->post('link_fb'),
				'link_tw' 	=> $this->input->post('link_tw'),
				'link_ig' 	=> $this->input->post('link_ig'),
				'link_yt' 	=> $this->input->post('link_yt'),
				'map' 		=> $this->input->post('map'),
			];

			$this->Model_app->update_data($where,$data,'config_info');

			if(!empty($_FILES['logo']['name'])){
				$config['upload_path']          = './assets/public/img/logo/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']            = $_FILES['logo']['name'];
				$config['overwrite']			= true;
				$config['max_size']             = 1024;
				
				$this->load->library('upload',$config);
				if($this->upload->do_upload('logo')){
					$gambar = $this->upload->data();
					$logo 	= $gambar['file_name'];
					$this->db->query("UPDATE config_info SET logo = '$logo'");
				}
			}

			redirect(base_url().'manage-info?alert=sukses');
		} else {
			redirect(base_url().'manage-info');
		}
	}
}