<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forbhp extends CI_Controller
{
    public function index()
    {
        $this->load->view('templateshome/header');
        $this->load->view('home/loadputusan');
        $this->load->view('templateshome/footer');
    }
}
