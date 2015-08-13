<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("templates/header-ext");
?>
<section class="Welcome">
    <h1 class="Welcome-h1">BIENVENIDO A <b>EXTRAVAGANZA</b></h1>
    <figure class="Welcome-figure">
        <?php echo img(['src' => 'assets/images/extravaganza/img-ciudad.png']); ?>
        <div class="Welcome-count">
            faltan <span>70</span>días
        </div>
    </figure>

    <p class="Welcome-p">
        Una oportunidad de ORO para los
        emprendedores del sector HORECA de dotar y
        renovar su restaurante.
    </p>
</section>

<section class="Register">
    <div class="Register-title">
        <div class="identification">
            <?php $this->load->view('extravaganza/svg/icon-cedula-08.svg'); ?>
        </div>
        <h2 class="Register-h2">CONSIGUE TU <b>CÉDULA MAKRO</b></h2>
    </div>

    <p class="Register-p">¡Regístrate con anticipación totalmente gratis</p>
    <?php echo form_open('', ['class' => 'Register-form', 'id'=> 'user_register_form']); ?>

    <div class="thanks">
        <span>GRACIAS POR</span><br /><span class="reg">REGISTRARTE</span>
        <p class="c_YES">En makro Extravaganza, reclama tu cédula y tus primeros $10.000 pesos makro acumulables para redimir premios instantáneos dentro de la Feria.</p>
        <p class="c_NO">Recuerda que puedes sacar tu pasaporte <strong>totalmente gratis</strong> en cualquiera de nuestras tiendas o directamente en la Feria Extravaganza.</p>

    </div>

    <input type="hidden" id="base_url" value="<?php echo base_url()?>">
    <?php foreach ($arrayForm as $key => $input): ?>
        <span id="<?php echo $key ?>" class="error"><?php echo $input['error'] ?></span>
        <?php echo form_input($input['config']); ?>
    <?php endforeach ?>

    <span id="s_store" class="error">Indique si tiene o no un Negocio.</span>

    <div class="content-input left hideForm">
        <span class="store">¿TIENES NEGOCIO?</span>
        <input type="radio" name="store" title="si" value="si">
        <input type="radio" name="store" title="no" value="no">
    </div>
    <span id="s_passaport" class="error">Indique si tiene o no Pasaporte Makro.</span>



    <div class="content-input hideForm">
        <span>¿TIENES PASAPORTE MAKRO?</span>
        <input type="radio" name="passaport" title="si" value="si">
        <input type="radio" name="passaport" title="no" value="no">
    </div>
    <figure class="DonJediondo">
        <?php echo img('assets/images/extravaganza/img-don-jediondo.png'); ?>
    </figure>

    <?php
    echo form_button($configSubmit, 'REGISTRARSE');
    echo form_close();
    ?>

</section>

<section class="Discovery">
    <div class="Discovery-content">
        <h4 class="discovery-h4">
            DESCUBRE TODOS LOS <br>
            <b> BENEFICIOS Y HERRAMIENTAS </b><br>
            CON LAS QUE CONTARÁN LOS VISITANTES EN
        </h4>

        <h3 class="discovery-h3">EXTRAVAGANZA <span></span></h3>
    </div>
</section>
<?php $this->load->view("templates/footer-ext"); ?>

<script> dayCounter();</script>

