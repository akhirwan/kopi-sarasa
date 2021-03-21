<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        if($this->session->userdata('status') !="telah_login"){
            redirect(base_url().'author?alert=belum_login');
        }
        $this->load->model('Model_app');
    }

    public function Index(){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Users';

        $data['users'] = $this->Model_app->get_data('user')->result();
            
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/user/list_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function WriteInfo($id){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Users';
        
        $data['users'] = $this->Model_app->edit_data(['uid' => $id], 'user')->result();

        if($id == 0){
            $data['name'] = '';
            $data['jobPost'] = '';
            $data['jobDesc'] = '';
            $data['joined'] = '';
            $data['address'] = '';
            $data['phone'] = '';
            $data['email'] = '';
            $data['facebook'] = '';
            $data['twitter'] = '';
            $data['instagram'] = '';
            $data['youtube'] = '';
        } else {
            $data['id'] = $data['users'][0]->uid;
            $data['name'] = $data['users'][0]->name;
            $data['jobPost'] = $data['users'][0]->job_position;
            $data['jobDesc'] = $data['users'][0]->job_desc;
            $data['joined'] = $data['users'][0]->joined_at;
            $data['address'] = $data['users'][0]->address;
            $data['phone'] = $data['users'][0]->phone;
            $data['email'] = $data['users'][0]->email;
            $data['facebook'] = $data['users'][0]->link_fb;
            $data['twitter'] = $data['users'][0]->link_tw;
            $data['instagram'] = $data['users'][0]->link_ig;
            $data['youtube'] = $data['users'][0]->link_yt;
        }

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/user/write_info_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function ActionInfo(){
        $id = $this->input->post('id');

        $goId = $this->Model_app->edit_data(['email' => $this->input->post('email')], 'user')->result();

        $goto = $this->input->post('submit');

        $data['name'] = $this->input->post('name');
        $data['job_position'] = $this->input->post('job_position');
        $data['job_desc'] = $this->input->post('job_desc');
        $data['joined_at'] = $this->input->post('joined_at');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        
        $data['link_fb'] = ($this->input->post('link_fb')) ? $this->input->post('link_fb') : '#';
        $data['link_tw'] = ($this->input->post('link_tw')) ? $this->input->post('link_tw') : '#';
        $data['link_ig'] = ($this->input->post('link_ig')) ? $this->input->post('link_ig') : '#';
        $data['link_yt'] = ($this->input->post('link_yt')) ? $this->input->post('link_yt') : '#';

        $data['picture'] = '';

        if($id == 0){
            if(count($goId) > 0){
                redirect(base_url().'manage-user-info/'.$id.'?alert=email_is_used');
            }
            $data['created_at'] = time();
            $data['created_by'] = $this->session->userdata('email');
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $this->Model_app->insert_data($data, 'user');
        }else{
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $this->Model_app->update_data(['uid' => $id],$data,'user');
        }

        if($goto == 'Submit'){
            redirect(base_url().'manage-users');
        }elseif($goto == 'Submit and Upload Image'){
            redirect(base_url().'manage-user-upload/'.$goId['uid']);
        }else{
            redirect(base_url().'manage-user-role/'.$goId['uid']);
        }
    }

    public function UploadImage($id){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Users';

        $data['users'] = $this->Model_app->edit_data(['uid' => $id], 'user')->result();

        if(!$data['users']) 
            redirect(base_url().'manage-users?alert=id_not_found');

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/user/upload_image_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function ActionUpload(){
        $goId = $this->Model_app->edit_data(['uid' => $this->input->post('id')], 'user')->result();
        // var_dump($_FILES);die;

        if(!$goId) 
            redirect(base_url().'manage-users?alert=id_not_found');
        
        $id = $this->input->post('id');
        $goto = $this->input->post('submit');
        if(!empty($_FILES['picture']['name'])){
            $config['upload_path']          = './assets/public/img/users/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $_FILES['picture']['name'];
            $config['overwrite']			= true;
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('picture')){
                $gambar = $this->upload->data();
                $picture = $gambar['file_name'];
                
                $this->db->query("UPDATE user SET picture = '$picture' WHERE uid = $id");
            }
        }

        if($goto == 'Submit'){
            redirect(base_url().'manage-users');
        }elseif($goto == 'Submit and View Image'){
            redirect(base_url().'manage-user-upload/'.$id);
        }else{
            redirect(base_url().'manage-user-role/'.$id);
        }
    }

    public function WriteRole($id){
        $data['config']	= $this->Model_app->get_data('config_info')->row();
        $data['title'] = 'Users';

        $data['users'] = $this->Model_app->edit_data(['uid' => $id], 'user')->result();

        if(!$data['users']) 
            redirect(base_url().'manage-users?alert=id_not_found');
        
        $data['credential'] = $this->Model_app->edit_data(['xid' => $id], 'credential')->result();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/user/write_role_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function Delete($id) {
        $this->Model_app->delete_data(['uid' => $id],'user');
        redirect(base_url().'manage-users?alert=sukses');
    }
}