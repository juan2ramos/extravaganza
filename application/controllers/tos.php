<?php

class Tos extends MK_Controller 
{

    public $title_site = 'Negocios Que Si Son Negocios';

    public function index()
    {
        $this->load->view('tos/index');
    }

}

