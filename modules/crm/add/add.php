<?php

class CrmAdd extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
        $this->data['sectors'] = $this->config->item('sectors');
    }

    public function getCrmAdd()
    {
        $this->template = 'admin/crm/add/add';
    }

    public function postCrmAdd()
    {	$this->template = 'admin/crm/add/add';		$_POST['other_sectors'] = implode(';',$_POST['other_sectors']);		$data = $_POST;		$insert = $this->admin_model->table_insert('crm',$data);		if ( $insert) {		$this->data['message'] = 'Saved Successfully!!!';		}else{		$this->data['message'] = 'Sorry,The data could not be saved..';		}
    }
}