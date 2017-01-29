<?php

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/login';
    }

    function index()
    {
        if ($this->session->userdata('user_session')) {
//            $this->display('user/welcome', '');
            redirect('user/lists');
        } else {
            $this->load->view($this->layout);
        }
    }

    function verify()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->display('user/login/form', '');
        } else {
            $res = $this->user_model->login($this->input->post('email'), $this->input->post('password'));
            if ($res !=false) {
                $this->session->set_userdata('user_session', $res);
                redirect('user/list', 'refresh');
            } else {
                $this->data['message'] = 'User does not exist.';
                $this->display('user/login/form', ['message' => $this->data]);
                return;
            }

        }

    }
}

?>
