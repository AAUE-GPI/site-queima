<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Queima das Fitas - Évora</title>
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url()?>assets/imgs/favicon.ico" />
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
</head>

<body style="<?php if (uri_string()=='precos' or uri_string()=='cartaz'){echo "color: white; background: url('" . base_url() . "assets/imgs/fundo_site_queima.svg') no-repeat center center fixed; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;";} else{echo "color: white; background-repeat: repeat-x; background-image: url('" . base_url() . "assets/imgs/fundo_site_queima.svg') ; background-size: auto 100%";} ?>" >
<div class="header-container">
    <img class="logoaaue-header" src="<?php echo base_url()?>assets/imgs/logoaaue.svg">
    <div class="botoes-header">
        <div onclick="window.location='<?php echo base_url()?>'" class="hvr-fade">
            <p class="texto-header">Home</p>
        </div>
        <div onclick="window.location='<?php echo base_url("index.php/cartaz")?>'" class="hvr-fade">
            <p class="texto-header">Cartaz</p>
        </div>
        <div onclick="window.location='<?php echo base_url("index.php/precos")?>'" class="hvr-fade">
            <p class="texto-header">Preços</p>
        </div>
        <div onclick="location.href='https://goo.gl/forms/VP2mtV5JEEDTW3L22'" class="hvr-fade">
            <p class="texto-header">Contacta-nos!</p>
        </div>
    </div>
</div>
