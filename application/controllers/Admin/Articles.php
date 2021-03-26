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
		$data['active_articles'] = 'active';

        $data['articles'] = $this->Model_app->get_data('articles')->result();
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/article/list_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Write($id) {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Articles';
		$data['active_articles'] = 'active';

        $data['articles'] = $this->Model_app->edit_data(['id' => $id], 'articles')->result();

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

    public function Action() {
        // var_dump($_FILES);exit;
        $id = $this->input->post('id');

        $data['title'] = $this->input->post('title');
        $data['slug'] = $this->input->post('slug');
        $data['content'] = $this->input->post('content');
        
        $isHead = $this->Model_app->edit_data(['id' => $id, 'display' => 1], 'articles')->result();

        if($isHead != null) {
            $data['is_published'] = 1; $data['display'] = 1;
        }else{
            $data['display'] = 0;
            $data['is_published'] = ($this->input->post('is_published') == 'Publish') ? 1 : 0;
        }

        if(!empty($_FILES['picture']['name'])){
            $config['upload_path']          = './assets/public/img/articles/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $_FILES['picture']['name'];
            $config['overwrite']			= true;
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('picture')){
                $gambar = $this->upload->data();
                $picture = $gambar['file_name'];
                
                // $this->db->query("UPDATE user SET picture = '$picture', modified_at = '$modifiedAt', modified_by = '$modifiedBy' WHERE uid = $id");
            }
        }else{
            // $picture = $this->input->post('picture');
            $picture = ($this->input->post('picture')) ? $this->input->post('picture') : '';
        }
        $data['picture'] = $picture;

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

        redirect(base_url().'manage-articles?alert=sukses');
    }

    public function Publish() {
        $where = ['id' => $this->input->post('id')];
        
        if($this->input->post('is_published') == "Published"){
            $data['is_published'] = 0;
            $data['display'] = 0;
        } else {
            $data['is_published'] = 1;
        }
    
        $data['modified_at'] = time();
        $data['modified_by'] = $this->session->userdata('email');
        // var_dump($this->input->post('id'), $data);exit;
    
        $this->Model_app->update_data($where, $data, 'articles');
    
        redirect(base_url().'manage-articles?alert=sukses');
    }

    public function Headlines() {
        $where = ['id' => $this->input->post('id')];

        if($this->input->post('display') == "Headlines"){
            $data['display'] = 0;
        } else {
            $this->Model_app->update_data(['display' => 1], ['display' => 0], 'articles');
            $data['display'] = 1;
            $data['is_published'] = 1;
        }
    
        // $data['display'] = 1;
        $data['modified_at'] = time();
        $data['modified_by'] = $this->session->userdata('email');
        // var_dump($this->input->post('id'), $data);exit;
    
        $this->Model_app->update_data($where, $data, 'articles');

        redirect(base_url().'manage-articles?alert=sukses');
    }

    public function Delete($id) {
        $this->Model_app->delete_data(['id' => $id],'articles');
        redirect(base_url().'manage-articles?alert=sukses');
    }
}