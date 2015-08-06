<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("templates/header-ext-ant");
?>
    <?php
      $config = array(
          'id'           => 'user_register_form',
          'class'        => 'user_form',
          'autocomplete' => 'off',
          'method'       => 'POST',
          'role'         => 'form'
      );
      $hidden = array(
          'base_url'  => base_url(),
          'passaport' => '',
          'store'     => ''
      );
      echo form_open('', $config,$hidden);

      $config = array(
              'name'    => 'don',
              'id'      => 'don',
              'src'     => 'assets/images/don_jed.png',
              'class'   => 'don',
          );
        echo img($config);
    ?>
    <div class="content_cc">
    	<div class="logo"><?php echo img("assets/images/icon-cedula.png");?></div>
    	<div class="get_it"><span>CONSIGUE TU </span><br /><span>CÉDULA MAKRO</span></div>
    	<p>Una oportunidad de ORO para los emprendedores del sector HORECA de dotar y renovar su restaurante.</p>
    	<div class="form_content">
		<?php

            echo ("<span id="."s_document"."  class="."error".">El DOCUMENTO es requerido, inválido o ya fue registrado.</span>");
            $config = array(
                'name'        => 'document',
                'id'          => 'document',
                'placeholder' => 'CÉDULA O NIT',
                'maxlength'   => '100',
                'class'     => 'f_input',
            );
            echo form_input($config);

			echo ("<span id="."s_names"." class="."error".">Los NOMBRES son requeridos.</span>");
	        $config = array(
	            'name'        => 'names',
	            'id'          => 'names',
	            'placeholder' => 'NOMBRES',
	            'maxlength'   => '100',
	            'class'		=> 'f_input',
	        );
	        echo form_input($config);

	    	echo ("<span id="."s_email"."  class="."error".">El E-MAIL es requerido, inválido o ya fue registrado.</span>");
	        $config = array(
	            'name'        => 'email',
	            'id'          => 'email',
	            'placeholder' => 'E-MAIL',
	            'maxlength'   => '100',
	            'class'		=> 'f_input',
	        );
	        echo form_input($config);
	    	
	    	echo ("<span id="."s_phone"."  class="."error".">El TELÉFONO es requerido.</span>");
	        $config = array(
	            'name'        => 'phone',
	            'id'          => 'phone',
	            'placeholder' => 'TELÉFONO',
	            'maxlength'   => '100',
	            'class'		=> 'f_input',
	        );
	        echo form_input($config);
	    
            ?>
            <span id="s_store" class="error">Indique si tiene o no un Negocio.</span>
            <br />
            <span class="store">¿TIENES NEGOCIO?</span>
            <button class="confirm confirm_store" id="st_yes">SI</button>
            <button class="confirm confirm_store" id="st_no">NO</button>
            <br />
            <span id="s_passaport" class="error">Indique si tiene o no Pasaporte Makro.</span>
            <br />
            <span>¿TIENES PASAPORTE MAKRO?</span>
            <button class="confirm confirm_passaport" id="p_yes">SI</button>
            <button class="confirm confirm_passaport" id="p_no">NO</button>
	        <?php 
                $config = array(
                    'name' => 'save_user',
                    'id' => 'save_user',
                    'class' => 'btn_action',
                );
                echo form_button($config,'<span class="">REGISTRARSE</span>');
            ?>
    	</div>
        <div class="thanks">
            <span>GRACIAS POR</span><br /><span class="reg">REGISTRARTE</span>
            <p class="c_YES">En makro Extravaganza, reclama tu cédula y tus primeros $10.000 pesos makro acumulables para redimir premios instantáneos dentro de la Feria.</p>
            <p class="c_NO">Recuerda que puedes sacar tu pasaporte <strong>totalmente gratis</strong> en cualquiera de nuestras tiendas o directamente en la Feria Extravaganza.</p>
            <button class="accept">ACEPTAR</button>
        </div>
    </div>
  
<?php $this->load->view("templates/footer-ext-ant");?>