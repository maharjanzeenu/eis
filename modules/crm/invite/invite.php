<?php
class CrmInvite extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'themes/cms';
    }

    public function getCrmInvite()
    {
        $this->data['id'] = $this->uri->segment(4);
        $this->data['query'] = $this->admin_model->table_fetch_rows('events');
        $this->template = 'admin/crm/invite/invite';
    }

    public function postCrmInvite(){
        $this->template = 'admin/crm/invite/invite';
        foreach($this->input->post('event_id') as $key=>$value){
            $data = array('client_id'=>$this->input->post('client_id'),
                'event_id'=>$value);
            $crm_details = $this->admin_model->table_fetch_row('crm_invite',$data);
            if(empty($crm_details)){
            	$this->admin_model->table_insert('crm_invite',$data);
            }
            
        }
         $this->data['message'] = 'Saved Successfully!!!';

    }
}
?>