<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        $this->load->library('form_validation');
    }

     
    public function halo(){
        echo "ini method halo pada controller belajar |Cara membuat controller pada codeigniter"; 
    }

    public function index()
    {
        $data["user"] = $this->user->getAll();
        $this->load->view("user/list", $data);
    }

    function tambah(){
		$this->load->view('user/new_form');
	}
 

    function add()
    {
        $user = $this->user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("user/new_form");
    }

    public function proses_input(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password);
        $this->user->input_data($data);
        redirect('crud/index');
    }

	function edit($id){
		$data['user'] = $this->user->getById($id)->result();
		$this->load->view('user/update',$data);
	}

    function update(){
        $id = $this->input->post('id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $where = array(
            'id' => $id
        );
        $data=array('name'=>$name,
        'email'=>$email,
        'username'=>$username,
        'password'=>$password);
        $this->user->update($data, $where);
        redirect('/crud/index');
    }

    public function delete($id=null)
    {
        if (!isset($id)){ show_404();}
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }
}