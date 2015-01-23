<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ave_auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_remember_token()
    {

    }

    public function set_remember_token()
    {

    }




    /**
     * _hassing() - stop being paranoic, sha512 is good enough
     *
     * @return string
     */
    protected function _hashing()
    {
        return hash('sha512', $string, $this->config->item('encryption_key'));
    }


}