<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
    {
        $this->load->view('admin/templates/auth_header');
        $this->load->view('admin/login');
        $this->load->view('admin/templates/auth_footer');

    }

    public function register()
    {
        $this->load->view('admin/templates/auth_header');
        $this->load->view('admin/register');
        $this->load->view('admin/templates/auth_footer');

    }
}
