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

		// paging
		$data['limit'] = 6;

		if(!isset($_GET['page'])) {
			$data['page'] = 1;
			$data['offset'] = 0;
		} else {
			$data['page'] = $_GET['page'];
			$data['offset'] = ($_GET['page'] - 1) * $data['limit'];
		}
		
		$data['commons'] = $this->db->query("SELECT * FROM articles WHERE display = 0 AND is_published = 1 ORDER BY id DESC LIMIT " . $data['limit'] . " OFFSET  " . $data['offset'])->result();

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

		if($time != 'd2ViLXByb2ZpbGU') {
			$data['articles'] = $this->Model_app->order_data(['created_at' => $time, 'is_published' => 1], 'id', 'DESC', 'articles')->result();

			$data['author']= $this->Model_app->edit_data(['email' => $data['articles'][0]->created_by], 'user')->result();

			$this->load->view('template/header_news', $data);
			$this->load->view('public/news/detail', $data);
		} else {
			// $data['articles'] = $this->Model_app->order_data(['display' => 2, 'is_published' => 1], 'id', 'DESC', 'config_info')->result();

			$this->load->view('template/header_about', $data);
			$this->load->view('public/news/about', $data);
		}
		$this->load->view('template/footer', $data);
    }
}