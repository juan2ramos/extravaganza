<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html xml:lang="es" lang="es">
	<head></head>
	<title><?php echo (isset($title)? $title : ''); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-mobile.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-tablet.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-desktop.css" type="text/css" />
	<body>
        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>" />
	