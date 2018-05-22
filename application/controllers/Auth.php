<?php

Class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_login');
    }

    function index() {

        $this->load->view('login');
    }

    function login() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil = $this->Model_login->chek_login($username, $password);
            if ($hasil == 1) {
                redirect('Dashboard');
            } else {
                redirect('Auth');
            }
        } else {
            $this->load->view('login');
        }
    }

}

?>