<?php

class CrmList extends MY_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->layout = 'themes/cms';

    }



    public function getCrmList()

    {

        $this->data['query'] = $this->admin_model->table_fetch_rows('crm');

        $this->template = 'admin/crm/list/list';

    }



    public function postCrmList()

    {



    }

}

?>