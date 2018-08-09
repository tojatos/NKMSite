<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
  <head>
    <base href="<?= base_url() ?>">
  	<link rel="stylesheet" href="<?= base_url('public/css/main.css') ?>">
  	<link href="<?= base_url('public/images/favico.ico') ?>" rel="shortcut icon" type="image/icon" />
  	<script src="<?= base_url('public/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  	<script src="<?= base_url('public/js/main.js') ?>"></script>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>NKM<?= isset($title) ? " - ".$title : "" ?></title>
  </head>
  <body>
