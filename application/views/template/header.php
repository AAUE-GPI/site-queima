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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
</head>

<!-- Passar isto para um ficheiro .css -->
<style>
    .hvr-fade {
        display: inline-block;
        line-height: 70px;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;
        overflow: hidden;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        margin: auto;
        width: 150px;
        height: 100px
    }

    .hvr-fade:hover, .hvr-fade:focus, .hvr-fade:active {
        background-color: #2098D1;
        color: white;
        cursor: pointer;
    }

    html, body { height: 100%; width: 100%; margin: 0; }
</style>

<body style="margin: 0px; color: white; background-image: url('<?php echo base_url()?>assets/fundo_site_queima.svg') ; font-family: Arial; background-size: 100% auto">
<div style="width: 100%; height: 100px; background-color:rgba(0,0,0,0.3);">
    <div>

        <img style="margin-left: 100px; margin-top:10px; height: 80px; width: auto; float: left" src="<?php echo base_url()?>assets/logoaaue.svg">
        <div style="float: right; margin-right: 20px">

            <div onclick="window.location='<?php echo base_url()?>'" class="hvr-fade">
                <p style="text-align: center; vertical-align: middle;">Home</p>
            </div>
            <div onclick="window.location='<?php echo base_url("index.php/cartaz")?>'" class="hvr-fade">
                <p style="text-align: center; vertical-align: middle;">Cartaz</p>
            </div>
            <div onclick="window.location='<?php echo base_url("index.php/precos")?>'" class="hvr-fade">
                <p style="text-align: center; vertical-align: middle;">Preços</p>
            </div>
        </div>
    </div>
</div>
