<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    private $_table = "users";

    public $id;
    public $name;
    public $email;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
            
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id]);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["username"];
        return $this->db->insert($this->_table, $this);
    }
    
    function edit_data($where){		
        return $this->db->get_where($this->_table,$where);
    }

    public function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->_table, $data);
    }

    public function input_data($data){
        return $this->db->insert($this->_table, $data);
    }

    

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}