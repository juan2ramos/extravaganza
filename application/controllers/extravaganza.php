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
     function home()
    {
        $title = 'conoce extravaganza';
        $arrayForm = [
            's_document' => [
                'config' => [
                    'name' => 'document',
                    'id' => 'document',
                    'placeholder' => 'CÉDULA O NIT',
                    'maxlength' => '100',
                    'class' => 'f_input',
                ],
                'error' => 'El DOCUMENTO es requerido, inválido o ya fue registrado'
            ],
            's_names' => [
                'config' => ['name' => 'names',
                    'id' => 'names',
                    'placeholder' => 'NOMBRES',
                    'maxlength' => '100',
                    'class' => 'f_input',
                ],
                'error' => 'Los NOMBRES son requeridos'
            ],

            's_email' => [
                'config' => [
                    'name' => 'email',
                    'id' => 'email',
                    'placeholder' => 'E-MAIL',
                    'maxlength' => '100',
                    'class' => 'f_input',
                ],
                'error' => 'El E-MAIL es requerido, inválido o ya fue registrado.'
            ],
            's_phone' => [
                'config' => [
                    'name' => 'phone',
                    'id' => 'phone',
                    'placeholder' => 'TELÉFONO',
                    'maxlength' => '100',
                    'class' => 'f_input',
                ], 'error' => 'El TELÉFONO es requerido'
            ],
        ];
        $configSubmit = array(
            'name' => 'save_user',
            'id' => 'save_user',
            'class' => 'btn_action',
        );
        $this->load->view("extravaganza/home", compact('title', 'arrayForm','configSubmit'));
    }
    function zone()
    {
        $title = 'Zonas de la feria';
        $this->load->view("extravaganza/zone", compact('title'));
    }
    function needKnow()
    {
        $title = 'Todo lo que necesita saber';
        $this->load->view("extravaganza/needKnow", compact('title'));
    }
    function getCard()
    {
        $title = 'Consigue tu pase';
        $this->load->view("extravaganza/getCard", compact('title'));
    }
}
