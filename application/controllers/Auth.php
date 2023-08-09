<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {


        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            # di sini tampilan
            $this->load->view('templateshome/header');
            $this->load->view('home/login');
            $this->load->view('templateshome/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        // cek ada user atau tidak
       if ($user) {
        //cek user aktif atau tidak
            if ($user['is_active']==1) {
                # cek password benar atau tidak
                if ($user['password'] == $password) {
                    # buat data untuk simpan di session
                    $data = array('username' => $user['username'],
                    'role_id' => $user['role_id']);
                    $this->session->set_userdata($data);
                    #cek role untuk menentukan halaman
                    if ($user['role_id']==1) {
                        redirect('forbhp');
                    }else {
                        redirect('home');
                    }
                } else {
                    print_r('password salah');
                }

            } else {
                print_r('user tidak aktif');
            }
       } else {
        print_r('user tidak terdaftar');
       }

    }
}
