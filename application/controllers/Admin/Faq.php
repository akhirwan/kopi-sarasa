<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
  function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'author?alert=belum_login');
		}
		$this->load->model('Model_app');
	}

  public function Index() {
    $data['config']	= $this->Model_app->get_data('config_info')->row();
    $data['title'] = 'FAQ';

    $data['faqs'] = $this->Model_app->get_data('faq')->result();
    $data['messages'] = $this->Model_app->get_data('messages')->result();
        
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/faq/list-view', $data);
    $this->load->view('admin/template/footer');
  }

  public function Insert() {
    $data['question']    = $this->input->post('question');
    $data['answer']      = $this->input->post('answer');
    $data['is_active']   = 1;
    $data['created_at']  = time();
    $data['modified_at'] = time();

    $this->Model_app->insert_data($data, 'faq');

    redirect(base_url().'manage-faq?alert=sukses');
  }

  public function Update() {
    $where = ['id' => $this->input->post('id')];

    $data['question']    = $this->input->post('question');
    $data['answer']      = $this->input->post('answer');
    $data['modified_at'] = time();

    $this->Model_app->update_data($where, $data, 'faq');

    redirect(base_url().'manage-faq?alert=sukses');
  }

  public function Active() {
    $where = ['id' => $this->input->post('id')];
    
    if($this->input->post('is_active') == "Aktif"){
      $data['is_active'] = 0;
    } else {
      $data['is_active'] = 1;
    }

    $data['modified_at'] = time();

    $this->Model_app->update_data($where, $data, 'faq');

    redirect(base_url().'manage-faq?alert=sukses');
  }

  public function Delete($id) {
    $this->Model_app->delete_data(['id' => $id],'faq');
    redirect(base_url().'manage-faq');
  }

  public function DelMsg($id) {
    $this->Model_app->delete_data(['id' => $id],'messages');
    redirect(base_url().'manage-faq');
  }
}