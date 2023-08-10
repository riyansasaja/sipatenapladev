<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forpta extends CI_Controller
{
    public function index()
    {

        $data['script'] = '';
        $data['title'] = 'PTA Dashboard';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('forptaview/header', $data);
        $this->load->view('forptaview/sidebar');
        $this->load->view('forptaview/topbar', $data);
        $this->load->view('forptaview/index', $data);
        $this->load->view('forptaview/footer', $data);
    }
}
