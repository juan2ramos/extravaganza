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
        <?php echo form_open('', ['class' => 'Register-form']); ?>

        <?php foreach ($arrayForm as $key => $input): ?>
            <span id="<?php echo $key ?>" class="error"><?php echo $input['error'] ?></span>
            <?php echo form_input($input['config']); ?>
        <?php endforeach ?>

        <span id="s_store" class="error">Indique si tiene o no un Negocio.</span>

        <span class="store">¿TIENES NEGOCIO?</span>


        <span id="s_passaport" class="error">Indique si tiene o no Pasaporte Makro.</span>
        <span>¿TIENES PASAPORTE MAKRO?</span>

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

