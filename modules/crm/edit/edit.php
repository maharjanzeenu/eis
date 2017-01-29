<?php
class CrmEdit extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
    }

    public function getCrmEdit()
    {
        $id = $this->input->get("id");
        if(false == $id){
            $id = $this->uri->segment(4);
        }
		$this->data['sectors'] = $this->config->item('sectors');
        $this->data['query'] = $this->admin_model->table_fetch_row('crm',array('id'=>$id));
        $this->template = 'admin/crm/edit/edit';
    }

    public function postCrmEdit()
    {
        $id = $this->uri->segment(4);
        $this->template = 'admin/crm/edit/edit';
		
		$_POST['other_sectors'] = implode(';',$_POST['other_sectors']);
		
		$data = $_POST;
		
		echo "<pre>";print_r($data);die;
		
		$update = $this->admin_model->table_update('crm',$data,array('id'=>$id));

        if ($update) {
            $this->session->set_flashdata('message','Updated successfully!!!');
            redirect('admin/crm/list');
        } else {
            $this->session->set_flashdata('message','Update unsuccessful!!!');
        }  
    }
}
?>