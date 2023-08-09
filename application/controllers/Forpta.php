<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forpta extends CI_Controller
{
    public function index()
    {
        $data['script'] = 'chart_forbhp.js';
        $this->load->view('templateshome/header');
        $this->load->view('home/loadputusan');
        $this->load->view('templateshome/footer', $data);
    }
}
