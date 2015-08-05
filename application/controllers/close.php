<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Close extends CI_Controller
{

    public function index($param = 0)
    {
        $params = array();

        if($param != 0)
        {
            $params = array('msg' => 'Tu correo ha sido guardado.');
        }

        $this->load->view('close/default', $params);
    }

    public function save()
    {
        $email = $this->input->post('email');

        $regex  = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))';
        $regex .= '@';
        $regex .= '((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        if (preg_match($regex, $email))
        {
            $this->db->insert('newsletter', array('email' => $email));
        }

        return redirect('close/index/1');
    }

}
