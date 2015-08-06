<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
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
            <a href="<?php echo site_url("conoce-extravaganza"); ?>"> <?php echo img(['src' => 'assets/images/extravaganza/logo.svg']); ?></a>
        </figure>
        <nav class="Header-nav">
            <ul>
                <li><a href="<?php echo site_url("zonas-feria"); ?>">CONOCE EXTRAVAGANZA</a></li>
                <li><a href="<?php echo site_url("lo-que-necesitas-saber"); ?>">ZONAS DE LA FERIA</a></li>
                <li><a href="<?php echo site_url("consigue-pase"); ?>">TODO LO QUE NECESITAS SABER</a></li>
                <li><a href="#">¡CONSIGUE TU PASE!</a></li>
            </ul>
        </nav>

        <div class="Header-content"></div>
    </header>

	