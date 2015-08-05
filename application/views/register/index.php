<?php $this->load->view('templates/header'); ?>
<?php $this->load->helper('form'); ?>

<section id="inscripcion">
  <article id="tematica">
    <div>
        <h1>
            <span class="light">CUÉNTANOS TU</span>
            <span class="strong">HISTORIA</span>
        </h1>
        <p>
            Participa en nuestra actividad del 28 de febrero al 30 de julio de 2015 y podrás ser uno de los 20 ganadores que se anunciarán en prensa, redes sociales, makro mail y en algunas revistas especializadas y comunicaciones de tienda, durante los meses de junio a septiembre.  

    También puedes participar en nuestra actividad a través de nuestras tiendas makro a nivel nacional (en los puntos de servicio al cliente) y en los RDC y Telemakro. 

    Si tu historia se ajusta a los criterios de la actividad, podrás ser elegido entre los cinco negocios mensuales que escoge el comité de selección entre los meses de mayo a agosto. Si eres escogido, tu negocio pasará por una evaluación de seguridad que makro realizará rigurosamente. De no pasar este filtro, se seleccionará otro negocio y así sucesivamente.
        </p>
        <a id="btn-inscripcion" href="#">INSCRIPCIÓN</a>
    </div>
    <div id="pasos">
        <h2>
            <span class="light">¿CÓMO</span>
            <span class="strong">PARTICIPAR?</span>
        </h2>
      <ul>
        <li>
          <h3>1</h3>
          <p>Haz click en el botón de “INSCRIPCIÓN” y empieza a participar.</p>
        </li>
        <li>
          <h3>2</h3>
          <p>Registra tu factura de compra, cuéntanos la historia de tu negocio y envíanos la mejor foto.</p>
        </li>
        <li>
          <h3>3</h3>
          <p>Si tu historia es elegida como una de las mejores, espera pronto nuestra llamada para que empieces a recibir nuestras sorpresas.</p>
        </li>
      </ul>
      
    </div>
    <div id="foto-don-jediondo">
      <?php echo img("assets/images/img-don-jediondo.png"); ?>
    </div>
  </article>
  <article id="formulario">
      <h1>
        <span class="light">CUÉNTANOS TU</span>
        <span class="strong">HISTORIA</span>
      </h1>
      <?php
        echo form_open_multipart('register/save', array('autocomplete' => 'off', 'class' => 'dropzone')); 

        echo form_error('business');
        echo form_input(array(
            'name'        => 'business',
            'value'       => set_value('business'),
            'placeholder' => 'Nombre del negocio'
        ));

        echo form_error('passport');
        echo form_input(array(
            'name'        => 'passport',
            'value'       => set_value('passport'),
            'placeholder' => 'Pasaporte Makro (NIT o Cédula)'
        ));

        echo form_error('activity');
        echo form_input(array(
            'name'        => 'activity',
            'value'       => set_value('activity'),
            'placeholder' => 'Actividad Comercial'
        ));

        echo '<br>';

        echo form_error('city');
        echo form_input(array(
            'name'        => 'city',
            'value'       => set_value('city'),
            'placeholder' => 'Ciudad'
        ));

        echo form_error('address');
        echo form_input(array(
            'name'        => 'address',
            'value'       => set_value('address'),
            'placeholder' => 'Dirección'
        ));

        echo form_error('phone');
        echo form_input(array(
            'name'        => 'phone',
            'value'       => set_value('phone'),
            'placeholder' => 'Teléfono'
        ));

        echo form_error('email');
        echo form_input(array(
            'name'        => 'email',
            'value'       => set_value('email'),
            'placeholder' => 'Correo electrónico'
        ));

        echo '<br>';
        echo '<br>';

        echo form_error('why');
        echo form_textarea(array(
            'name'        => 'why',
            'value'       => set_value('why'),
            'placeholder' => '¿Por qué su negocio si es negocio?'
        ));
        
        echo '<br>';

        echo form_error('story');
        echo form_textarea(array(
            'name'        => 'story',
            'value'       => set_value('story'),
            'placeholder' => '¿Cuál es su historia?'
        ));

        echo '<br>';

        echo form_error('how');
        echo form_textarea(array(
            'name'        => 'how',
            'value'       => set_value('how'),
            'placeholder' => '¿Cómo lo ha apoyado makro en este tiempo?'
        ));

        echo '<br>';

        echo form_error('help');
        echo form_textarea(array(
            'name'        => 'help',
            'value'       => set_value('help'),
            'placeholder' => '¿Cómo le gustaría que makro lo apoyara?'
        ));

        echo '<br>';

        echo form_error('tos');
        echo '<div class="terminos">';
        echo '<input type="checkbox" name="tos" value="TOS">';
        echo '<p>Confirmo haber leído los '.anchor('tos', 'términos y condiciones', array('target' => '_blank')).'</p>';
        echo '</div>';

        echo form_error('hd');
        echo '<div class="terminos">';
        echo '<input type="checkbox" name="hd" value="HD">';
        echo '<p>Acepto el aviso de '.anchor('habeasdata', 'protección de datos', array('target' => '_blank')).'</p>';
        echo '</div>';

        echo '<br>';

        echo '<a href="#" class="subir-img" id="subir-imagen">Foto del negocio';
        echo form_upload(array(
            'name'   => 'photo',
            'accept' => 'image/*'
        ));
        echo '</a>';

        echo '<a href="#" class="subir-img" id="subir-factura">Subir factura';
        echo form_upload(array(
            'name'   => 'bill',
            'accept' => 'image/*'
        ));
        echo '</a>';

      ?>
        <input type="submit" value="REGISTRARSE">
      </form>

      <aside id="map">
        <h3>Si no tienes pasaporte acércate a tu  Makro  más cercano</h3>
        <?php
            $name  = '<strong>'.img("assets/images/img-asterisco.png").'</strong>';
            $name .= '<p>Haz click aquí para encontrar tu makro más cercano.</p>';
            $name .= img("assets/images/img-map.png"); 
            echo anchor('tiendas', $name);
        ?>
      </aside>
  </article>
  <!--
  <?php if(isset($isSaved) && $isSaved == true): ?>
  <aside class="pop-up">
    <div id="registro-exitoso">
      <h2>¡Gracias por <br> Registrarte! </h2>
      <p>Pronto conoceras más negocios que si son negocio.</p>
      <?php echo anchor('home','FINALIZAR'); ?>
    </div>
  </aside>
  <?php endif; ?>-->
</section>

<?php $this->load->view('templates/footer'); ?>
