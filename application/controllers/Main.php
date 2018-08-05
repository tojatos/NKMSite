<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_controller
{
	public function index($content_name = "main")
	{
		$this->show_main_view(['content' => $this->get_view($content_name)]);
	}
}
