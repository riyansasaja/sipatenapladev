<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('templateshome/header');
        $this->load->view('home/login');
        $this->load->view('templateshome/footer');
    }
}
