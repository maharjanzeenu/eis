<?php

class Csv extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }

    function index() {
        $data['user'] = $this->csv_model->get_data();
        $this->load->view('csvindex', $data);
    }

    function importcsv() {
        $table_name = $this->input->post('table_name');

        $data['data'] = $this->csv_model->get_data();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('csvindex', $data);
        } else {
            if ($table_name == 'user') {
                $this->import_electrochemicals($table_name);
            } else {
                $this->import_electrochemicals($table_name);
            }

    }

        function import_user($table_name) {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];

            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'username'=>$row['username'],
                        'email'=>$row['email'],
                        'password'=>md5($row['password']),
                    );
                    $this->csv_model->insert_csv($insert_data, $table_name);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                //echo "<pre>"; print_r($insert_data);
            } else
                $data['error'] = "Error occured";
            $this->load->view('csvindex', $data);
        }
        }

        function import_electrochemicals($table_name) {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];

            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'identification_ID'=>$row['identification_ID'],
                        $table_name=>$row[$table_name],
                    );
                    $this->csv_model->insert_csv($insert_data, $table_name);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                //echo "<pre>"; print_r($insert_data);
            } else
                $data['error'] = "Error occured";
            $this->load->view('csvindex', $data);
        }
}
/*END OF FILE*/
