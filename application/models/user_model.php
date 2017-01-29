<?php

class User_model extends MY_Model

{

    public function __construct()
    {
        parent::__construct();
    }


    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }


    public function get_id()
    {
        if ($this->input->get('id')) {
            $id = $this->input->get('id');
        } else {
            $id = $this->uri->segment(4);
        }
        return $id;
    }


    public function prepare_where($where)
    {
        if (is_array($where) && count($where) > 0) {
            foreach ($where as $column => $value) {
                $this->db->where($column, $value);
            }
        } elseif (is_string($where)) {
            $this->db->where($where);
        }

    }


    public function prepare_order_by($order_by)
    {
        if (is_array($order_by) && count($order_by) > 0) {
            foreach ($order_by as $column => $value) {
                $this->db->order_by($column, $value);
            }
        } elseif (is_string($order_by)) {
            $this->db->order_by($order_by);
        }

    }


    public function table_fetch_rows($table, $where = array(), $order_by = array())
    {
        $this->db->select('*');
        $this->db->from($table);

        $this->prepare_where($where);
        $this->prepare_order_by($order_by);

        $query = $this->db->get();
        return $query->result_array();
    }


    public function table_fetch_row($table, $where = array(), $order_by = array())
    {
        $this->db->select('*');
        $this->db->from($table);

        $this->prepare_where($where);
        $this->prepare_order_by($order_by);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_table_fields($table)
    {
        $fields = $this->db->list_fields($table);
        return $fields;
    }

    private function prepare_table_data($table, $data = array())
    {
        $fields = $this->get_table_fields($table);
        // print_r($fields);
        if (false == $fields || count($fields) == 0) {
            return false;
        }

        $insert = array();
        $data = empty($data) ? $this->input->post(null, true) : $data;
        //print_r($data);

        foreach ($fields as $field) {
            if (!isset($data[$field])) {
                continue;
            }

            $insert[$field] = $data[$field];
        }

        if (!empty($insert)) {
            return $insert;
        } else
            return false;
    }

    public function table_insert($table, $data = array())
    {
        $insert = $this->prepare_table_data($table, $data);

        if ($insert == false) {
            return false;
        }

        if ($this->db->insert($table, $insert)) {
            return $this->db->insert_id();
        } else
            return false;
    }


    public function table_update($table, $data = array(), $where = array())
    {
        $insert = $this->prepare_table_data($table, $data);

        if ($insert == false) {
            return false;
        }

        $this->prepare_where($where);

        if ($this->db->update($table, $insert)) {
            return true;
        } else
            return false;
    }

    public function delete_table_row($table, $where)
    {
        $this->prepare_where($where);
        $this->db->delete($table);
    }


}

?>