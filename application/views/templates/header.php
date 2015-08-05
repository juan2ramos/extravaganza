<!DOCTYPE html5>
<html xml:lang="es" lang="es">
  <head>
    <title><?php echo  $this->title_site ?></title>
    <?php echo link_tag('assets/css/negocios2.css'); ?>
    <meta charset="utf-8">
    <script>
      (function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
          var fbds = document.createElement('script');
          fbds.async = true;
          fbds.src = '//connect.facebook.net/en_US/fbds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(fbds, s);
          _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '874038255965505']);
      })();
      window._fbq = window._fbq || [];
      window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=874038255965505&amp;ev=PixelInitialized" /></noscript>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  	  ga('create', 'UA-43695848-2', 'auto');
  	  ga('send', 'pageview');
	</script>
  </head>
  <body>
    <!-- HEADER (LOGO Y MENU) -->
    <header>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <ul>
        <li class="logo-fondo-rojo">
          <?php 
            $image_properties = array('src' => 'assets/images/logo-makro.png','height' => '30');
            echo anchor('home', img($image_properties) );
          ?>
        </li>
        <li id="links">
          <ul>
<?php /*            <li>
              <?php echo anchor('register','INICIATIVA MAKRO'); ?>
              <span class="circulo"><strong></strong></span>
            </li> */ ?>
            <li>
              <?php echo anchor('tos','TÉRMINOS Y CONDICIONES'); ?>
              <span class="circulo"><strong></strong></span>
            </li>
            <li>
              <?php echo anchor('tiendas','TIENDAS'); ?>
              <span class="circulo"><strong></strong></span>
            </li>
          </ul>
        </li>
        <li id="log-in">
          <a>&nbsp;</a>
<?php /*
          <a href="#">LOG IN</a>
          <form>
            <input type="text" placeholder="PASAPORTE MAKRO">
            <input type="password" placeholder="CONTRASEÑA">
            <input type="submit" value="ENTRAR">
          </form>
 */ ?>
        </li>
      </ul>
      <?php 
            $menu = array('src' => 'assets/images/menu-icon.png','height' => '40', 'width' => '40', 'id' => 'menu', 'class' => 'menu');
            echo img($menu);
          ?>
    </header>
