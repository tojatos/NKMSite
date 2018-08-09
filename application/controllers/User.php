<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_controller
{
	public function index($content_name = "main")
	{
		$this->show_main_view(['content' => $this->get_view($content_name)]);
	}
	public function ajax_register()
  {
    $post_data = [
      'name' => $this->input->post('name'),
      'login' => $this->input->post('login'),
      'password' => $this->input->post('password'),
      'password_confirm' => $this->input->post('password_confirm'),
      'description' => $this->input->post('description'),
    ];
    $is_data_validated = $this->validate_ajax_register($post_data);
		if( ! $is_data_validated) return false;
    $this->load->model('User_model');
    $user_data = [
      'name' => $post_data['name'],
      'login' => $post_data['login'],
      'password' => $post_data['password'],
			'description' => $post_data['description']
    ];
    $is_user_created = $this->User_model->create_user($user_data);
		if( ! $is_user_created) return;
		echo "success";
  }
	public function ajax_login()
  {
    $post_data = [
      'login' => $this->input->post('login'),
      'password' => $this->input->post('password'),
    ];
    $is_data_validated = $this->validate_ajax_login($post_data);
		if( ! $is_data_validated) return;
    $this->load->model('User_model');
    $is_login_successful =  $this->User_model->login($post_data);
		if( ! $is_login_successful) return;
		echo "success";
  }
	public function validate_ajax_login($post_data)
	{
		return false;
	}

	public function validate_ajax_register($post_data)
	{
		return true;
	}
	public function ajax_validate_name()
	{
		$response = [
		  'valid' => false,
		  'message' => 'Pole "Nazwa" jest puste!'
		];
		$name = $this->input->post('name');
		if($name !== null)
		{
	    $this->load->model('User_model');
	    $name_exists = $this->User_model->name_exists($name);
			if($name_exists)
			{
				$response = [
				  'valid' => false,
				  'message' => 'Taka nazwa już istnieje'
				];
			}
			else
			{
				$response = [ 'valid' => true ];
			}
		}
		echo json_encode($response);
	}
	public function ajax_validate_login()
	{
		$response = [
		  'valid' => false,
		  'message' => 'Pole "Login" jest puste!'
		];
		$name = $this->input->post('login');
		if($name !== null)
		{
	    $this->load->model('User_model');
	    $name_exists = $this->User_model->login_exists($name);
			if($name_exists)
			{
				$response = [
				  'valid' => false,
				  'message' => 'Taki login już istnieje'
				];
			}
			else
			{
				$response = [ 'valid' => true ];
			}
		}
		echo json_encode($response);
	}
}
