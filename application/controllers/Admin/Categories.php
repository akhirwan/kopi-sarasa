<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        if($this->session->userdata('status') !="telah_login"){
            redirect(base_url().'author?alert=belum_login');
        }
        $this->load->model('Model_app');
    }

    public function Index() {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Categories';
        
        $data['categories'] = $this->Model_app->get_data('categories')->result();
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/category/list_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Insert() {
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['is_active'] = 1;
        $data['created_at'] = time();
        $data['created_by'] = $this->session->userdata('email');
        $data['modified_at'] = time();
        $data['modified_by'] = $this->session->userdata('email');
    
        $this->Model_app->insert_data($data, 'categories');
    
        redirect(base_url().'manage-categories?alert=sukses');
    }

    public function Update() {
        $where = ['id' => $this->input->post('id')];
    
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['modified_at'] = time();
        $data['modified_by'] = $this->session->userdata('email');

        // var_dump($where,$data);die;
    
        $this->Model_app->update_data($where, $data, 'categories');
    
        redirect(base_url().'manage-categories?alert=sukses');
    }

    public function Active() {
        $where = ['id' => $this->input->post('id')];
        
        if($this->input->post('is_active') == "Aktif"){
          $data['is_active'] = 0;
        } else {
          $data['is_active'] = 1;
        }
    
        $data['modified_at'] = time();
    
        $this->Model_app->update_data($where, $data, 'categories');
    
        redirect(base_url().'manage-categories?alert=sukses');
    }
    
    public function Delete($id) {
        $this->Model_app->delete_data(['id' => $id],'categories');
        redirect(base_url().'manage-categories');
    }
}