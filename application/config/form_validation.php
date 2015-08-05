<?php

$config = array(
    'register/save' => array(
        array(
            'field' => 'business',
            'label' => 'Nombre del negocio',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'passport',
            'label' => 'Pasaporte makro',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'activity',
            'label' => 'Actividad comercial',
            'rules' => 'required|trim'
        ),


        array(
            'field' => 'city',
            'label' => 'Ciudad',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'address',
            'label' => 'Dirección',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'phone',
            'label' => 'Teléfono',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Correo electrónico',
            'rules' => 'required|trim|valid_email'
        ),


        array(
            'field' => 'why',
            'label' => '¿Por qué su negocio si es negocio?',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'story',
            'label' => '¿Cuál es su historia?',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'how',
            'label' => '¿Cómo lo ha apoyado makro en este tiempo?',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'help',
            'label' => '¿Cómo le gustaría que makro lo apoyara?',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'tos',
            'label' => 'Términos y condiciones',
            'rules' => 'required'
        ),
        array(
            'field' => 'hd',
            'label' => 'Protección de datos',
            'rules' => 'required'
        )
    )
);

