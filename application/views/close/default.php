<?php $this->load->view('templates/header-close'); ?>

<section id="home">
  <h1>Gracias por participar en Negocios que si son Negocio.</h1>
  <h2>¡Muy pronto estaremos anunciando los ganadores!</h2>
  <h3>Si quieres conocer todo los beneficios que makro tiene para ti inscríbete aquí.</h3>
  <br>
  <?php if(isset($msg) && $msg != ''): ?>
    <div class="msg" style="font-size: 1.5em;">
      <?php echo $msg; ?>
    </div>
  <?php else: ?>
    <?php echo form_open('close/save'); ?>
      <input type="email" value="" placeholder="Correo electrónico" name="email" />
      <input type="submit" value="GUARDAR" />
    </form>
  <?php endif; ?>
  <br>
  <br>
</section>

<?php $this->load->view('templates/footer'); ?>

