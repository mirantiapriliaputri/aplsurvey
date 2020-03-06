<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller
{

    public function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('dash/dashboard');
        $this->load->view('templates/footer');
    }
    public function admin()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('dash/admin');
        $this->load->view('templates/footer');
    }
}
