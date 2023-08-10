<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forpa extends CI_Controller
{
    public function index()
    {
        $data['script'] = 'chart_forbhp.js';
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('forpaview/header', $data);
        $this->load->view('forpaview/sidebar');
        $this->load->view('forpaview/topbar', $data);
        $this->load->view('forpaview/index', $data);
        $this->load->view('forpaview/footer', $data);
    }
}
