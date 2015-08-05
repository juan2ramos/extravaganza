<?php

class HabeasData extends MK_Controller 
{

    public $title_site = 'Negocios Que Si Son Negocios';

    public function index()
    {
        $this->load->view('habeasdata/index');
    }

}


