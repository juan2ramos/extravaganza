<?php $this->load->view('templates/header'); ?>

<section id="home">
  <article>
    <h1>
      <span>NEGOCIOS</span>
      <span class="light">QUE SÍ SON</span>
      <span class="bigger">NEGOCIO</span>
    </h1>
    <div id="video">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tRY4yjoHEd8" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php echo anchor('register','PARTICIPAR','id="btn-participar"'); ?>
  </article>
  <?php echo img(array('src' => 'assets/images/logo-mk.jpg', 'class' => 'year')); ?>
</section>

<?php $this->load->view('templates/footer'); ?>
