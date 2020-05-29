<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->is_logged_in())
        {
            redirect("dashboard");
        }
        else{
            $this->load->view('login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post("username", TRUE);
            $password = MD5($this->input->post('password', TRUE));

            $checking = $this->admin->check_login('login', array('username' => $username), array('password' => $password));

            if ($checking != FALSE) {
                foreach ($checking as $apps) {

                    $session_data = array(
                        'user_id'   => $apps->id_user,
                        'user_name' => $apps->username,
                        'user_pass' => $apps->password,
                        'user_nama' => $apps->nama_user,
                        'role'      => $apps->role
                    );
                    
                    $this->session->set_userdata($session_data);
                    redirect('dashboard');
                }
            }
            else {
                $gagal['fail'] = "Username or password wrong!";
                $this->load->view('failedlogin', $gagal);
            }
        }
        else {
            $gagal['fail'] = "Username or password wrong!";
            $this->load->view('failedlogin', $gagal);
        }
    }
}