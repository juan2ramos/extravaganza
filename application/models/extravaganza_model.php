<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Extravaganza_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->prefix = 'extravaganza';
        
    }

    public function save($data)
    {
        if(isset($data['id']) && $data['id'] != 0)
        {
            $id = (int) $data['id'];
            $this->db->where('id', $id);

            unset($data['id']);
            $this->db->update('extravaganza', $data);

            return $id;
        }
        else
        {
            $this->db->insert('extravaganza', $data);

            return $this->db->insert_id();
        }
    }

    public function get_user_by_document($document){
        $this->db->select('u.*');
        $this->db->from('extravaganza AS u');
        $this->db->where('u.document',$document);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_user_by_email($email){
        $this->db->select('u.*');
        $this->db->from('extravaganza AS u');
        $this->db->where('u.email',$email);
        $query = $this->db->get();
        return $query->row_array();
    }

}

