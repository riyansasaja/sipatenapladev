<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forbhp extends CI_Controller
{
    public function index()
    {
        $data['script'] = 'chart_forbhp.js';
        $this->load->view('templatearticles/header');
        $this->load->view('home/loadputusan');
        $this->load->view('templatearticles/footer', $data);
    }
}
