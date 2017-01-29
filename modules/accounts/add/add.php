<?php
class AccountsAdd extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
    }

    public function getAccountsAdd()
    {
        $this->template = 'admin/accounts/add/add';
    }

    public function postAccountsAdd()
    {
        $this->template = 'admin/accounts/add/add';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[accounts.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[7]|required');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->data['msg'] = $this->form_validation->error_string();
        } else {
            $data = array(
                'name' => $this->input->post("name"),
                'email' => $this->input->post("email"),
                'password' => sha1($this->input->post("password")),
                'status' => $this->input->post("status")
            );

            if ( $this->db->insert('accounts', $data) ){
                $this->session->set_flashdata('message','Inserted successfully!!!');
                redirect('admin/accounts/list');
            }
            else{
                $this->data['message'] = 'Sorry,The data could not be saved';
            }

        }
    }
}
?>