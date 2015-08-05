<?php

class Register extends CI_Controller 
{
    public $title_site = 'Registro';

    public function __construct()
    {
        parent::__construct();
        return redirect('close');
    }

    public function index()
    {
        $this->load->view('register/index');   
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == false)
        {
            $this->load->view('register/index');
        }
        else
        {
            $this->load->model('Users_model', 'Users');

            $data = array(
                'business' => $this->input->post('business'),
                'passport' => $this->input->post('passport'),
                'activity' => $this->input->post('activity'),
                'city'     => $this->input->post('city'),
                'address'  => $this->input->post('address'),
                'phone'    => $this->input->post('phone'),
                'email'    => $this->input->post('email'),
                'why'      => $this->input->post('why'),
                'story'    => $this->input->post('story'),
                'how'      => $this->input->post('how'),
                'help'     => $this->input->post('help')
            );

            if($id = $this->Users->save($data))
            {
                $this->load->library('upload');

                $config['upload_path']   = './business/';
                $config['file_name']     = 'Photo-'.sprintf('%04d', $id);
                $config['allowed_types'] = 'gif|jpg|png|bmp';
                $config['max_size']      = '10240';

                $this->upload->initialize($config);
                $this->upload->do_upload('photo');


                $config['upload_path']   = './business/';
                $config['file_name']     = 'Bill-'.sprintf('%04d', $id);
                $config['allowed_types'] = 'gif|jpg|png|bmp';
                $config['max_size']      = '10240';

                $this->upload->initialize($config);
                $this->upload->do_upload('bill');
            }

            return redirect('register/thanks');
        }
    }

    public function thanks()
    {
        $this->load->view('register/thanks'); 
    }

    public function success()
    {
        $this->load->view('register/index', array('isSaved' => true));
    }

}
