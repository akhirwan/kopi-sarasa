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
		$data['active_dashboard'] = 'active';

		$data['sum_articles'] 	= $this->Model_app->get_data('articles')->num_rows();
		$data['sum_users'] 		= $this->Model_app->get_data('user')->num_rows();
		$data['sum_items'] 		= $this->Model_app->get_data('items')->num_rows();

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
		
		$data['messages'] = $this->Model_app->get_data('messages')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/index', $data);
		$this->load->view('admin/template/footer');
    }

    public function ConfInfo() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();
		$data['title'] = 'Dashboard';
		$data['active_config'] = 'active';

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/web_info', $data);
		$this->load->view('admin/template/footer');
    }

	public function UpdateInfo() {
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

			

			redirect(base_url().'manage-info?alert=sukses');
		} else {
			redirect(base_url().'manage-info');
		}
	}

    public function ConfAbout() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();
		$data['title'] = 'Dashboard';
		$data['active_config'] = 'active';

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/web_about', $data);
		$this->load->view('admin/template/footer');
    }

	public function UpdateAbout() {
		$this->form_validation->set_rules('desc_title','Judul Konten','required');
		$this->form_validation->set_rules('description','Isi Konten','required');

		if($this->form_validation->run()!=false){
			$where = [];
			$data['desc_title'] = $this->input->post('desc_title');
			$data['description'] = $this->input->post('description');
			$data['desc_banner'] = '';

			if(!empty($_FILES['desc_banner']['name'])){
				$config['upload_path']          = './assets/public/img/about/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']            = $_FILES['desc_banner']['name'];
				$config['overwrite']			= true;
				
				$this->load->library('upload',$config);
				if($this->upload->do_upload('desc_banner')){
					$gambar 				= $this->upload->data();
					$data['desc_banner'] 	= $gambar['file_name'];
				}
			}

			$this->Model_app->update_data($where,$data,'config_info');

			redirect(base_url().'manage-about?alert=sukses');
		} else {
			redirect(base_url().'manage-about');
		}
	}

    public function ConfContent() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();
		$data['title'] = 'Dashboard';
		$data['active_config'] = 'active';

		$data['configure'] = $this->Model_app->get_data('config_info')->result();
        
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashboard/web_content', $data);
		$this->load->view('admin/template/footer');
    }

	public function UpdateContent() {
		switch($this->input->post('submit')) {
			case "Upload Logo" :
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

				redirect(base_url().'manage-content?alert=sukses');

				break;
			case "Upload Header" :
				if(!empty($_FILES['head_banner']['name'])){
					$config['upload_path']          = './assets/public/img/header/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['file_name']            = $_FILES['head_banner']['name'];
					$config['overwrite']			= true;
					
					$this->load->library('upload',$config);
					if($this->upload->do_upload('head_banner')){
						$gambar 	= $this->upload->data();
						$headBanner = $gambar['file_name'];
						$this->db->query("UPDATE config_info SET head_banner = '$headBanner'");
					}
				}

				redirect(base_url().'manage-content?alert=sukses');
				
				break;
			case "Upload Body" :
				if(!empty($_FILES['body_banner']['name'])){
					$config['upload_path']          = './assets/public/img/body/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['file_name']            = $_FILES['body_banner']['name'];
					$config['overwrite']			= true;
					
					$this->load->library('upload',$config);
					if($this->upload->do_upload('body_banner')){
						$gambar 	= $this->upload->data();
						$bodyBanner = $gambar['file_name'];
						$this->db->query("UPDATE config_info SET body_banner = '$bodyBanner'");
					}
				}

				redirect(base_url().'manage-content?alert=sukses');
				
				break;
		}
	}
}