<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_app');
	}

	public function Index()	{
		$data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Home';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_home'] = 'active';

		$data['quotes'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'home' AND is_active = 1")->result();
		$data['categories'] = $this->Model_app->edit_data(['is_active' => 1], 'categories')->result(); 
		
		$data['items'] = $this->Model_app->order_data(['is_active' => 1], 'id', 'DESC', 'items')->result();

		$data['headlines'] = $this->Model_app->order_data(['is_published' => 1, 'display' => 1], 'id', 'DESC', 'articles')->result();
		
		$this->load->view('template/header', $data);
		$this->load->view('public/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function Home($id) {
		$data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Home';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_home'] = 'active';

		$data['quotes'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'home' AND is_active = 1")->result();
		$data['categories'] = $this->Model_app->edit_data(['is_active' => 1], 'categories')->result(); 
		
		$data['items'] = $this->Model_app->order_data(['is_active' => 1, 'category' => $id], 'id', 'DESC', 'items')->result();

		$data['headlines'] = $this->Model_app->order_data(['is_published' => 1, 'display' => 1], 'id', 'DESC', 'articles')->result();
		
		$this->load->view('template/header', $data);
		$this->load->view('public/home', $data);
		$this->load->view('template/footer', $data);
	}

	public function About() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'About';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_about'] = 'active';

		$data['quotes'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'about' AND is_active = 1")->result();
		// $data['users'] = $this->Model_app->edit_data(['is_active' => 1], 'user')->result();
		// $data['articles'] = $this->Model_app->edit_data(['is_published' => 1], 'articles')->result();
		$data['users'] = $this->Model_app->order_data(['is_active' => 1], 'uid', 'ASC', 'user')->result();
		$data['articles'] = $this->Model_app->order_data(['is_published' => 1, 'display' => 0], 'id', 'DESC', 'articles')->result();
		
		$this->load->view('template/header', $data);
		$this->load->view('public/about', $data);
		$this->load->view('template/footer', $data);
	}
	
	public function Contact() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Contact';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_contact'] = 'active';

		$data['faqs'] = $this->db->query("SELECT * FROM faq WHERE is_active = 1")->result();
		$data['quo_contact'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'contact' AND is_active = 1")->result();
		$data['quo_faq'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'faq' AND is_active = 1")->result();

		$this->load->view('template/header', $data);
		$this->load->view('public/contact', $data);
		$this->load->view('template/footer', $data);
	}

	public function Message() {
		// var_dump($this->input->post('name'));
		$data['id'] = time();
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['message'] = $this->input->post('message');

		$this->Model_app->insert_data($data, 'messages');
		redirect(base_url().'contact?alert=sukses');
	}
	
	public function Items() {
        $data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Menu';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_item'] = 'active';

		$data['quotes'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'home' AND is_active = 1")->result();

		$data['categories'] = $this->Model_app->edit_data(['is_active' => 1], 'categories')->result(); 
		
		$data['items'] = $this->Model_app->order_data(['is_active' => 1], 'id', 'DESC', 'items')->result();

		$this->load->view('template/header', $data);
		$this->load->view('public/item', $data);
		$this->load->view('template/footer', $data);
    }

	public function Employees() {
		$data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Teams';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_team'] = 'active';

		$data['quotes'] = $this->db->query("SELECT * FROM quotes WHERE paging = 'about' AND is_active = 1")->result();
		
		$data['users'] = $this->Model_app->order_data(['is_active' => 1], 'uid', 'ASC', 'user')->result();
		
		$this->load->view('template/header', $data);
		$this->load->view('public/team', $data);
		$this->load->view('template/footer', $data);
	}
}
