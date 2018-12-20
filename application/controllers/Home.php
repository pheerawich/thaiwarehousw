<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url')); // โหลดเฮลเปอร์ form และ url ของ ci มาใช้งาน
        $this->load->library('form_validation'); // โหลดไลบรารี่ form_validation ของ ci มาใช้งาน
        $this->load->library('email');
        $this->load->model('login_model');
    }

    function index() {
        $this->load->view('home', [
            'h' => $this->login_model->test2()
        ]);
    }

    public function validate() {
        $this->form_validation->set_rules('user', 'User', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('emailr', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_view');
        } else {
            $user = $this->input->post('user');
            $name = $this->input->post('name');
            $lastname = $this->input->post('lastname');
            $email = $this->input->post('emailr');
            $password = $this->input->post('password');
            $data = array('user' => $user, 'name' => $name, 'lastname' => $lastname, 'emailr' => $email, 'password' => $password);
            $this->load->model('login_model');
            $this->login_model->add($data);
            $this->load->view('login_view');
        }
    }

    public function addware() {
        $this->form_validation->set_rules('nameth', 'nameth', 'required');
        $this->form_validation->set_rules('nameeng', 'nameeng', 'required');
        $this->form_validation->set_rules('location', 'location', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('category', 'category', 'required');
        $this->form_validation->set_rules('pricerange', 'pricerange', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('featured', 'featured', 'required');
        $this->form_validation->set_rules('contacts', 'contacts', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('image', 'image', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('AddWarehouse');
        } else {
            $nameth = $this->input->post('nameth');
            $nameeng = $this->input->post('nameeng');
            $location = $this->input->post('location');
            $city = $this->input->post('city');
            $category = $this->input->post('category');
            $pricerange = $this->input->post('pricerange');
            $description = $this->input->post('description');
            $featured = $this->input->post('featured');
            $contacts = $this->input->post('contacts');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $image = $this->input->post('image');
            $status = $this->input->post('status');
            $data1 = array('nameth' => $nameth, 'nameeng' => $nameeng, 'location' => $location, 'city' => $city, 'category' => $category, 'pricerange' => $pricerange, 'description' => $description, 'featured' => $featured, 'contacts' => $contacts, 'phone' => $phone, 'email' => $email, 'image' => $image, 'status' => $status);
            $this->load->model('login_model');
            $this->login_model->addw($data1);
            $this->load->view('AddWarehouse');
        }
    }

    function index00() {
        $this->load->database();
        $this->load->model('login_model');
        $data ['query'] = $this->login_model->get_all_data();
        $this->load->view('NEWSEVENT1', $data);
    }

    function index0() {
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $this->db->select('*');
        $this->db->from('username');
        $this->db->where('user', $user);
        $this->db->where('password', $password);
        $result = $this->db->get();
        if ($result->num_rows() == 1) {
            $this->load->view('home1', [
                'h1' => $this->login_model->test2()
            ]);
        } else {
            $this->load->view('login_view');
        }
    }

    function getwarehouse() {
        $nameth = $this->input->post('nameth');
        $nameeng = $this->input->post('nameeng');
        $location = $this->input->post('location');
        $city = $this->input->post('city');
        $category = $this->input->post('category');
        $pricerange = $this->input->post('pricerange');
        $description = $this->input->post('description');
        $featured = $this->input->post('featured');
        $contacts = $this->input->post('contacts');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $image = $this->input->post('image');
        $status = $this->input->post('status');
        $o = $this->login_model->test1($nameth, $nameeng, $location, $city, $category, $pricerange, $description, $featured, $contacts, $phone, $email, $image, $status);
        $this->load->view('NEWSEVENT1', $o);
    }

    function update() {
        $nameth = $this->input->post('nameth');
        $nameeng = $this->input->post('nameeng');
        $location = $this->input->post('location');
        $city = $this->input->post('city');
        $category = $this->input->post('category');
        $pricerange = $this->input->post('pricerange');
        $description = $this->input->post('description');
        $featured = $this->input->post('featured');
        $contacts = $this->input->post('contacts');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $image = $this->input->post('image');
        $status = $this->input->post('status');
        $this->login_model->update($nameth, $nameeng, $location, $city, $category, $pricerange, $description, $featured, $contacts, $phone, $email, $image, $status);
        $this->load->view('NEWSEVENT1', [
            'o' => $this->login_model->test1()
        ]);
    }

    function update1($id) {
        $this->load->view('edit', [
            'r' => $this->login_model->test3($id)
        ]);
    }

    function delete($id) {
        $this->login_model->delete($id);
        redirect(base_url('Home/NEWSEVENT1'));
    }

    function saveprofile() {
        $user = $this->input->post('user');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $emailr = $this->input->post('emailr');
        $password = $this->input->post('password');
        $this->login_model->saveprofile($user, $name, $lastname, $emailr, $password);
        $this->load->view('profile');
    }

    function home() {
        $this->load->view('home', [
            'h' => $this->login_model->test2()
        ]);
    }

    function search($id = '17') {
        $this->load->view('search', [
            'ser' => $this->login_model->search($id)
        ]);
    }

    function searchitem($id = '17') {
        $this->load->model('login_model');
        $this->login_model->user2_get($id);
        $$this->load->view('search', [
            'ser' => $this->login_model->search($id)
        ]);
    }

    function search1($id = "15") {
        $this->load->view('search1', [
            'ser1' => $this->login_model->search1($id)
        ]);
    }

    function About() {
        $this->load->view('about');
    }

    function NEWSEVENT() {
        $this->load->view('NEWSEVENT');
    }

    function ContactUS() {
        $this->load->view('ContactUS');
    }

    function Register() {
        $this->load->view('register_view');
    }

    function Login() {
        $this->load->view('login_view');
    }

    function Logout() {
        $this->load->view('home');
    }

    function home1() {
        $this->load->view('home1', [
            'h1' => $this->login_model->test2()
        ]);
    }

    function AddWarehouse() {
        $this->load->view('AddWarehouse');
    }

    function profile($id = "3") {
        $this->load->view('profile', [
            'pro' => $this->login_model->editprofile($id)
        ]);
    }

    function NEWSEVENT1() {
        $this->load->view('NEWSEVENT1', [
            'o' => $this->login_model->test1()
        ]);
    }

    function About1() {
        $this->load->view('about1');
    }

    function ContactUS1() {
        $this->load->view('ContactUS1');
    }

    function new01() {
        $this->load->view('new01');
    }

    function new02() {
        $this->load->view('new02');
    }

    function new03() {
        $this->load->view('new03');
    }

    function new1() {
        $this->load->view('new1');
    }

    function new2() {
        $this->load->view('new2');
    }

    function new3() {
        $this->load->view('new3');
    }

}
