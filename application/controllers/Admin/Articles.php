<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        if($this->session->userdata('status') !="telah_login"){
            redirect(base_url().'author?alert=belum_login');
        }
        $this->load->model('Model_app');
    }

    public function Index() {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Articles';

        $data['articles'] = $this->Model_app->get_data('articles')->result();
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/article/list_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Write($id) {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Articles';

        $data['articles'] = $this->Model_app->get_data('articles')->result();

        if($id == 0) {
            $data['title'] = '';
            $data['slug'] = '';
            $data['content'] = '';
            $data['is_publised'] = '';
            $data['picture'] = '';
            $data['display'] = '';
        } else {
            $data['id'] = $data['articles'][0]->id;
            $data['title'] = $data['articles'][0]->title;
            $data['slug'] = $data['articles'][0]->slug;
            $data['content'] = $data['articles'][0]->content;
            $data['is_publised'] = $data['articles'][0]->is_published;
            $data['display'] = $data['articles'][0]->display;
            $data['picture'] = $data['articles'][0]->picture;
        }
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/article/add_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Action(){
        $id = $this->input->post('id');

        $data['title'] = $this->input->post('title');
        $data['slug'] = $this->input->post('slug');
        $data['content'] = $this->input->post('content');
        $data['is_published'] = $this->input->post('is_published');
        $data['picture'] = $this->input->post('picture');
        $data['display'] = $this->input->post('display');

        if($id == 0){
            $data['created_at'] = time();
            $data['created_by'] = $this->session->userdata('email');
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $this->Model_app->insert_data($data, 'articles');
        }else{
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $this->Model_app->update_data(['id' => $id],$data,'articles');
        }

        redirect(base_url().'manage-articles');
    }
}