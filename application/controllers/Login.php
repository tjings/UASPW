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

            }else{
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                if ($this->form_validation->run() == TRUE) {

                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                $checking = $this->admin->check_login('uas', array('username' => $username), array('password' => $password));

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

                        if($this->session->userdata("role") == "admin"){
                            redirect('admin/dashboard/');
                        }else{
                            redirect('user/dashboard/');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }

        }

    }
}