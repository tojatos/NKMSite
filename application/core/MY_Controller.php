<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    protected function show_view($view_name, $data = [])
    {
        $this->load->view('inc/header');
        $this->load->view($view_name, $data);
        $this->load->view('inc/footer');
    }
    protected function show_main_view($data = [])
    {
		$data['main_nav'] = $this->get_main_nav();
        $this->show_view('main_view_template', $data);
    }
    protected function get_view($path, $data = [])
    {
        return $this->load->view($path, $data, TRUE);
    }
    protected function get_main_nav()
    {
        return $this->load->view('inc/main_nav', '', TRUE);
    }
    protected function show_message($message, $data = [])
    {
        $data['content'] = $this->get_view('show_message', ['message' => $message]);
        $data['main_nav'] = $this->get_main_nav();
        $this->show_main_view($data);
    }
}
