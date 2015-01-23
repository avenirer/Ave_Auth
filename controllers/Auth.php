<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'hello';
    }

    public function first_use()
    {
        echo 'first use';

    }
    public function login()
    {

	}
    public function users()
    {

    }
    public function add_user()
    {

    }
    public function edit_user($id)
    {

    }
    public function delete_user($id)
    {

    }
    public function roles()
    {

    }
    public function add_role()
    {

    }
    public function edit_role($id)
    {

    }
    public function delete_role($id)
    {

    }
}