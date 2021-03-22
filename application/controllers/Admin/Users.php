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

        $checkEmail = $this->Model_app->edit_data(['email' => $this->input->post('email')], 'user')->result();
        if(count($checkEmail) > 0){
            if($id > 0){
                redirect(base_url().'manage-user-info/'.$id.'?alert=email_is_used');
            }else{
                redirect(base_url().'manage-user-info/0?alert=email_is_used');
            }
        }

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
            $data['is_active'] = 1;
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

        $goId = $this->Model_app->edit_data(['email' => $this->input->post('email')], 'user')->result();
        // var_dump($goId[0]);exit;

        if($id == 0){
            $credential = [
                'xid' => $goId[0]->uid,
                'username' => $goId[0]->email,
                'password' => md5('kopi_rahasia'),
                'level' => 'user',
                'token' => '',
                'is_active' => 1,
            ];

            $this->Model_app->insert_data($credential, 'credential');
        }else{
            $credential['username'] = $goId[0]->email;

            $this->Model_app->update_data(['xid' => $id], $credential,'credential');
        }

        if($goto == 'Submit'){
            redirect(base_url().'manage-users');
        }elseif($goto == 'Submit and Upload Image'){
            redirect(base_url().'manage-user-upload/'.$goId[0]->uid);
        }else{
            redirect(base_url().'manage-user-role/'.$goId[0]->uid);
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
        
        $modifiedAt = time();
        $modifiedBy = $this->session->userdata('email');

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
                
                $this->db->query("UPDATE user SET picture = '$picture', modified_at = '$modifiedAt', modified_by = '$modifiedBy' WHERE uid = $id");
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
        
        $data['credential'] = $this->Model_app->edit_data(['xid' => $id], 'credential')->result();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/user/write_role_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function ActionRole(){
        $where = ['xid' => $this->input->post('id')];

        $data['username'] = $this->input->post('username');
        $data['level'] = $this->input->post('level');

        if($this->input->post('password')) $data['password'] = $this->input->post('password');

        $this->Model_app->update_data($where, $data, 'credential');
        redirect(base_url().'manage-users');
    }

    public function Active() {
        $where = ['uid' => $this->input->post('id')];
        
        if($this->input->post('is_active') == "Aktif"){
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $data['is_active'] = 0;
        } else {
            $data['modified_at'] = time();
            $data['modified_by'] = $this->session->userdata('email');
            $data['is_active'] = 1;
        }
    
        $data['modified_at'] = time();
    
        $this->Model_app->update_data($where, $data, 'user');

        $check = $this->Model_app->edit_data(['xid' => $this->input->post('id')], 'credential');
        if ($check) $this->Model_app->update_data(['xid' => $this->input->post('id')], ['is_active' => $data['is_active']], 'credential');
    
        redirect(base_url().'manage-users?alert=sukses');
    }

    public function Delete($id) {
        $this->Model_app->delete_data(['uid' => $id],'user');
        $this->Model_app->delete_data(['xid' => $id],'credential');
        redirect(base_url().'manage-users?alert=sukses');
    }
}