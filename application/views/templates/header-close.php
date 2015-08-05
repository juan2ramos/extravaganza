<!DOCTYPE html5>
<html xml:lang="es" lang="es">
  <head>
    <title><?php echo  $this->title_site ?></title>
    <?php echo link_tag('assets/css/negocios2.css'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
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
    <style>
        h1 {
            padding-top: 1.5em;
            padding-bottom: 1em;
            font-size: 2em;
            letter-spacing: 0.03em;
        }
        h2 {
            padding-top: 1em;
            font-size: 1.5em;
            line-height: 1.2em;
        }
        h3 {
            font-size: 1em;
            line-height: 1.2em;
            font-weight: normal;
            text-shadow: 0 0 1px #ccc;
            padding: 0 1em;
        }
        input {
            width: 300px;
            display: block;
            margin: auto;
            text-align: center;
            font-size: 1.3em;
            border: 1px solid #ccc;
            padding: 0.3em;
        }
        input[type=submit] {
            display: block;
            background-color: #333333;
            border: none;
            height: 40px;
            font-family: aller-light;
            font-size: 20px;
            margin: 20px auto;
            color: white;
            cursor: pointer;
        }
        iframe {
            display:none;
        }
        #home {
            padding-top: 60px;
        }
    </style>
  </head>
  <body style="background: #E80205;">
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
