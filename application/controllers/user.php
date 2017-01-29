<?php

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/user';
        if (!$this->session->userdata('user_session')) {
            redirect('user/login');
        } else {
            $session_data = $this->session->userdata('user_session');
            $this->data['username'] = $session_data['username'];
            $this->data['user'] = $this->session->userdata('user_session');
            $this->template = 'user/lists';
            $this->display('user/lists');
        }
    }

    public function index()
    {
//        $module = $this->input->get('module');
//        $action = $this->input->get('action');
//        if (empty($module)) {
//            $module = $this->uri->segment(2);
//        }
//        if (empty($action)) {
//            $action = $this->uri->segment(3);
//        }
//        if (isset($module) && ($action)) {
//
//            $controller = $this->load->module($module, $action);
//            if ($this->session->flashdata('message') != false) {
//                $controller->data['message'] = $this->session->flashdata('message');
//            }
//            $controller->data['user'] = $this->session->userdata('user_session');
//            $controller->call();
//            $controller->display();
//            return;
//        } else {
        if ($this->session->userdata('user_session')) {
            $session_data = $this->session->userdata('user_session');
            $this->data['username'] = $session_data['username'];
            $this->data['user'] = $this->session->userdata('user_session');
            $this->template = 'user/lists';
            $this->display('user/lists');

        } else {
            redirect('user/login');
        }
//        }
    }

    public function lists()
    {
        $this->template = 'user/lists';
        $this->display('user/lists');
    }

    public function logout()
    {
        $this->session->unset_userdata('user_session');
        $this->session->sess_destroy();
        redirect('user', 'refresh');
    }

}