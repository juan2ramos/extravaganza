<?php

class MK_Controller extends CI_Controller
{

    public $title_site = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function isLogged()
    {
        $id = (int) $this->session->userdata('id');

        if($id > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function startSessionWith($user)
    {
        foreach($user as $key => $value)
        {
            $this->session->set_userdata($key, $value);
        }
    }

}
