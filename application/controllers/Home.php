<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('templateshome/header');
        $this->load->view('home/index');
        $this->load->view('templateshome/footer');
    }

    public function downloadPutusan()
    {
        $this->load->view('templateshome/header');
        $this->load->view('home/loadputusan');
        $this->load->view('templateshome/footer');
    }

    public function login()
    {
        $this->load->view('templateshome/header');
        $this->load->view('home/login');
        $this->load->view('templateshome/footer');
    }
}
