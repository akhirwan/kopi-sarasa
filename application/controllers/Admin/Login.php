<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_app');
	}

    public function index(){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $this->load->view('admin/login_view', $data);
    }
}

?>