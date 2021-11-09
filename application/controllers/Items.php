<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

    function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_app');
	}

	public function Index(){
        $data['config']	= $this->Model_app->get_data('config_info')->row();

		$data['title'] = 'Menu';
		$data['meta_keyword'] = $data['config']->app_name;
		$data['meta_description'] = $data['config']->company;
		$data['active_item'] = 'active';

		$this->load->view('template/header', $data);
		$this->load->view('public/index', $data);
		$this->load->view('template/footer', $data);
    }
}