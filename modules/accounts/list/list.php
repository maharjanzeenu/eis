<?php
class AccountsList extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
    }

    public function getAccountsList()
    {
        $this->data['query'] = $this->admin_model->table_fetch_rows('accounts');
        $this->template = 'admin/accounts/list/list';
    }

    public function postAccountsList()
    {
    }
}
?>