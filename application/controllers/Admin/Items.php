<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        if($this->session->userdata('status') !="telah_login"){
            redirect(base_url().'author?alert=belum_login');
        }
        $this->load->model('Model_app');
    }

    public function Index() {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Items';

        $data['items'] = $this->Model_app->get_data('items')->result();
        $data['categories'] = $this->Model_app->get_data('categories')->result();
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/item/list_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Write($id) {
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Items';

        $where = ['id' => $id];
        $data['items'] = $this->Model_app->edit_data($where, 'items')->result();
        $data['categories'] = $this->Model_app->get_data('categories')->result();

        if($id == 0){
            $data['code'] = 'ITEM-'.time();
            $data['name'] = '';
            $data['price'] = '';
            $data['category'] = '';
            $data['description'] = '';
            $data['picture'] = '';
        } else {
            $data['id'] = $data['items'][0]->id;
            $data['code'] = $data['items'][0]->code;
            $data['name'] = $data['items'][0]->name;
            $data['price'] = $data['items'][0]->price;
            $data['category'] = $data['items'][0]->category;
            $data['description'] = $data['items'][0]->description;
            $data['picture'] = $data['items'][0]->picture;
        }
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/item/add_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Action() {
        $id = $this->input->post('id');
        $data['code'] = $this->input->post('code');
        $data['name'] = $this->input->post('name');
        $data['price'] = $this->input->post('price');
        $data['category'] = $this->input->post('category');
        $data['description'] = $this->input->post('description');
        $data['is_active'] = 1;

        if($id == 0){
            $data['created_at'] = time();
            $data['created_by'] = $this->session->userdata('email');
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $data['picture'] = '';
            $this->Model_app->insert_data($data, 'items');
        } else {
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $this->Model_app->update_data(['id' => $id],$data,'items');
        }
        
        if(!empty($_FILES['picture']['name'])){
            $config['upload_path']          = './assets/public/img/items/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $_FILES['picture']['name'];
            $config['overwrite']			= true;
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('picture')){
                $gambar = $this->upload->data();
                $picture = $gambar['file_name'];
                // $data['items'] = $this->Model_app->edit_data($where, 'items')->result();
                $this->db->query("UPDATE items SET picture = '$picture' WHERE id = $id");
            }
        }

        redirect(base_url().'manage-items?alert=sukses');                                                         
    }

    public function Active() {
        $where = ['id' => $this->input->post('id')];
        
        if($this->input->post('is_active') == "Aktif"){
            $data['is_active'] = 0;
        } else {
            $data['is_active'] = 1;
        }
    
        $data['modified_at'] = time();
    
        $this->Model_app->update_data($where, $data, 'items');
    
        redirect(base_url().'manage-items?alert=sukses');
    }

    public function Delete($id) {
        $this->Model_app->delete_data(['id' => $id],'items');
        redirect(base_url().'manage-items?alert=sukses');
    }

}