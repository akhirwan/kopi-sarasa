<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_app');
	}

    public function Index() {
        $data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'News';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_news'] = 'active';

        $data['headlines'] = $this->Model_app->order_data(['display' => 1, 'is_published' => 1], 'id', 'DESC', 'articles')->result();

        $data['commons'] = $this->Model_app->order_data(['display' => 0, 'is_published' => 1], 'id', 'DESC', 'articles')->result();

        $this->load->view('template/header', $data);
		$this->load->view('public/news/index', $data);
		$this->load->view('template/footer', $data);
    }

    public function News($slug) {
        $data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'News';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_news'] = 'active';

        $time = explode('-', $slug)[0];

        $data['articles'] = $this->Model_app->order_data(['created_at' => $time, 'is_published' => 1], 'id', 'DESC', 'articles')->result();

        $this->load->view('template/header', $data);
		$this->load->view('public/news/detail', $data);
		$this->load->view('template/footer', $data);
    }
}