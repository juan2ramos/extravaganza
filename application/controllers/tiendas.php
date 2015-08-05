<?php

class Tiendas extends CI_Controller 
{
    public $title_site = 'Tiendas';

    public function index()
    {
        $this->load->view('tiendas/index');   
    }
}