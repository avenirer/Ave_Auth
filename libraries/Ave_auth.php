<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ave_auth
{

	function __construct()
	{
		$this->load->config('ave_auth', TRUE);
		$this->load->driver('session');
		$this->load->helper(array('cookie', 'language','url'));
		$this->lang->load('ave_auth');
		$this->load->model('ave_auth_model');
	}

	public function login()
	{
		
	}

	public function forgotten_password()
	{

	}

	public function forgotten_password_complete()
	{

	}

	public function forgotten_password_check()
	{

	}

	public function register()
	{

	}

	public function logout()
	{

	}

	public function logged_in()
	{

	}

	public function get_user_id()
	{

	}

	public function is_admin()
	{

	}

	public function in_group()
	{

	}


	/**
	 * __get
	 *
	 * Enables use of CI super-global.
	 *
	 * @access	public
	 * @param	$var
	 * @return	mixed
	 */
	public function __get($var)
	{
		return get_instance()->$var;
	}
}