<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function create_user($user_data)
	{
		// $is_validated = $this->validate_user_data($user_data);
		// if( ! $is_validated) return false;
		$insert_data = [
			'Name' => $user_data['name'],
			'Login' => $user_data['login'],
			'Password' => password_hash($user_data['password'], PASSWORD_DEFAULT),
		];
		return $this->db->insert('User', $insert_data);
		// return true;
	}
	// private function validate_user_data($d)
	// {
	// 	if($d['login'])
	// 	return true;
	// }

	public function login_exists($login)
	{
		return $this->value_exists('Login', $login);
	}
	public function name_exists($name)
	{
		return $this->value_exists('Name', $name);
	}

	private function value_exists($column_name, $field_value)
	{
		return $this->db->get_where('User', [$column_name => $field_value], 1)->result() != null;
	}
	// public function get_user_id($username)
	// {
	// 	$user_data = $this->db->get_where(USER_TABLE, array('login' => $username), 1);
	// 	if ($user_data->result() != null) {
	// 		return $user_data->result()[0]->id_user;
	// 	} else {
	// 		throw new Exception('Błąd w wyciąganiu ID użytkownika. Skontaktuj się z administratorem.');
	//
	// 		return null;
	// 	}
	// }
	// public function user_exists($id_user)
	// {
	// 	$user_data = $this->db->get_where(USER_TABLE, array('id_user' => $id_user), 1);
	// 	if ($user_data->result() != null) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
}
