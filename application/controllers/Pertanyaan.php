<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pertanyaan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
            $data['title'] = 'Form Tambah Data Pertanyaan';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

          
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pertanyaan/tambah', $data);
            $this->load->view('templates/footer');

         
    }
}
