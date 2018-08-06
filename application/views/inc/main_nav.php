<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="main_nav">
  <div class="left">
	<a href=<?= base_url() ?> class="nkm_logo"></a>
  </div>
  <div class="center">
	<a href=<?= base_url("About") ?> class="nav_link">O grze</a>
	<a href=<?= base_url("Gallery") ?> class="nav_link">Galeria</a>
	<a href=<?= base_url("CharacterQueue") ?> class="nav_link">Kolejka postaci</a>
	<a href=<?= base_url("Download") ?> class="nav_link">Pobierz</a>
  </div>
  <div class="right">
	<a href=<?= base_url("Login") ?> class="nav_link">Zaloguj się</a>
  </div>
</nav>
