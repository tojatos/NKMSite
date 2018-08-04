<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_controller{

	public function index()
	{
		$this->load->helper('url');
		$this->show_main_view(['content' => $this->get_view("main")]);
	}
}
