<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public $nameth;
    public $nameeng;
    public $location;
    public $city;
    public $category;
    public $pricerange;
    public $description;
    public $featured;
    public $contacts;
    public $phone;
    public $email;
    public $image;
    public $status;

    function add($data) {
        $this->db->insert('username', $data);
        return $this->db->insert_id();
    }

    function addw($data1) {
        $this->db->insert('addwarehouse', $data1);
        return $this->db->insert_id();
    }

    function get($data) {
        $this->db->get('addwarehouse', $data);
        return $this->db->get_id();
    }

    function ajax() {
        $this->db->select('*');
        $this->db->from('username');
        return $this->db->get()->result();
    }

    function registre($data) {
        $this->db->insert('username', $data);
    }

    function get_all_data() {

        $query = $this->db->get('addwarehouse');
        return $query->result();
    }

    function test1() {
        $this->db->select('*');
        $this->db->from('addwarehouse');
        $result = $this->db->get();
        return $result->result();
    }

    function get_item($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    function test2() {
        $this->db->select('*');
        $this->db->from('addwarehouse');
        $result = $this->db->get();
        return $result->result();
    }

    function update($nameth, $nameeng, $location, $city, $category, $pricerange, $description, $featured, $contacts, $phone, $email, $image, $status) {
        $this->nameth = $nameth;
        $this->nameeng = $nameeng;
        $this->location = $location;
        $this->city = $city;
        $this->category = $category;
        $this->pricerange = $pricerange;
        $this->description = $description;
        $this->featured = $featured;
        $this->contacts = $contacts;
        $this->phone = $phone;
        $this->email = $email;
        $this->image = $image;
        $this->status = $status;
        return $this->db->update('addwarehouse', $this, array('nameth' => $nameth));
    }

    function test3($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('addwarehouse');
        $result = $this->db->get();
        return $result->row();
    }

    function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('addwarehouse');
    }

    function editprofile($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('username');
        $result = $this->db->get();
        return $result->row();
    }

    function saveprofile($user, $name, $lastname, $emailr, $password) {
        $this->user = $user;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->emailr = $emailr;
        $this->passwoed = $password;
        return $this->db->update('username', $this, array('user' => $user));
    }

    function search($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('addwarehouse');
        $result = $this->db->get();
        return $result->result();
    }

    function search1($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('addwarehouse');
        $result = $this->db->get();
        return $result->result();
    }

}
