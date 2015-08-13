<DOCTYPE>
<html lang="es">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="author" content=""/>
    <meta name="contact" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <!-- Meta Facebook -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Styles -->
    <?php echo link_tag('assets/css/normalize.css'); ?>
    <?php echo link_tag('assets/css/style.css'); ?>
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
<main>
    <header class="Header">
        <div class="button-nav">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <figure class="Header-logo">
            <a href="<?php echo site_url("extravaganza"); ?>"> <?php echo img(['src' => 'assets/images/extravaganza/logo.svg']); ?></a>
        </figure>
        <nav class="Header-nav">
            <ul>
                <li><a href="<?php echo site_url("extravaganza/conoce-extravaganza"); ?>">CONOCE EXTRAVAGANZA</a></li>
                <li><a href="<?php echo site_url("extravaganza/zonas-feria"); ?>">ZONAS DE LA FERIA</a></li>
                <li><a href="<?php echo site_url("extravaganza/lo-que-necesitas-saber"); ?>">TODO LO QUE NECESITAS SABER</a></li>
                <!--<li><a href="<?php /*echo site_url("extravaganza/consigue-pase"); */?>">¡CONSIGUE TU PASE!</a></li>-->
            </ul>
        </nav>

        <div class="Header-content"></div>
    </header>

	