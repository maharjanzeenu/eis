<?php
class AccountsEdit extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
    }

    public function getAccountsEdit()
    {
        $id = $this->input->get('id');
        if (empty($id)) {
            $id = $this->uri->segment(4);
        }
        $this->data['query'] = $this->admin_model->table_fetch_row('accounts',array('id'=>$id));
        $this->template = 'admin/accounts/edit/edit';
    }

    public function postAccountsEdit()
    {
        //$id = $this->input->post('admin_id');
        $id = $this->uri->segment(4);
        $this->template = 'admin/accounts/edit/edit';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'min_length[7]|trim');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|matches[password]');

        $accounts = $this->db->where('id', $this->input->post('admin_id'))->get('accounts')->result_object();
        $this->data['query'] = $accounts;


        if ($this->db-> where('id !=', $this->uri->segment(4))->where('email', $this->input->post('email'))->get('accounts')->num_rows() > 0 ) {
            $this->session->set_flashdata('message','Email is already in use by another account.');;
            redirect($_SERVER['HTTP_REFERER']);
        }

        if ($this->form_validation->run() == FALSE) {
            $this->data['msg'] = $this->form_validation->error_string();
        } else {
            $data = array(
                'name' => $this->input->post("name"),
                'email' => $this->input->post("email"),
                );

            if($this->input->post("password")) {
                $data['password'] = sha1($this->input->post("password"));
            }

            if($this->input->post("status") != "") {
                $data['status'] = $this->input->post("status");
            }

            $this->db->where('id', $id);
            if ($this->db->update('accounts', $data)) {
                $this->session->set_flashdata('message','Updated successfully!!!');
                redirect('admin/accounts/list');
            } else {
                $this->session->set_flashdata('message','Update Unsuccessful!!!');
            }

        }
    }
}
?>