<?php

class Home extends CI_Controller 
{

    public $title_site = 'Negocios Que Si Son Negocios';

    public function __construct()
    {
        parent::__construct();
        return redirect('close');
    }

    public function index()
    {
        $this->load->view('home/index');
    }

}
