<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'Admin/Login?alert=belum_login');
		}
		$this->load->model('Model_app');
	}

    public function Index() {
        echo 'BAKEKOK';
    }
}