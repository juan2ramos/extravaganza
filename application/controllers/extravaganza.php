<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extravaganza extends CI_Controller {

	public function index()
	{
        $params = array(
                'title' => 'Extravaganza'
            );
		$this->load->view("extravaganza/register",$params);
	}

	public function register()
    {
        $params = array(
                'title' => 'Extravaganza'
            );
		$this->load->view("extravaganza/register",$params);
	}

    public function save_user()
    {
        $errors = array();
        $this->load->model('Extravaganza_model', 'Extravaganza');
        
        $data = array(
            'names'         => $this->input->post('names'),
            'email'         => trim($this->input->post('email')),
            'document'      => trim($this->input->post('document')),
            'phone'         => trim($this->input->post('phone')),
            'store'         => $this->input->post('store'),
            'passaport'     => $this->input->post('passaport'),
            'date_register' => date('Y-m-d H:i:s')
        );

        if(empty($data['names'])){
            $errors[] = 'names';
        }

        if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || $this->Extravaganza->get_user_by_email($data['email'])){
            $errors[] = 'email';
        }

        if(empty($data['document'])){
            $errors[] = 'document';
        }else if($this->Extravaganza->get_user_by_document($data['document'])){
            $errors[] = 'document';
        }

        if(empty($data['phone'])){
            $errors[] = 'phone';
        }

        if(empty($data['store'])){
            $errors[] = 'store';
        }

        if(empty($data['passaport'])){
            $errors[] = 'passaport';
        }

        if(empty($errors)){
            $this->Extravaganza->save($data);
            echo json_encode($data["passaport"]);
        }else{
            echo json_encode($errors);
        }
    }
}
