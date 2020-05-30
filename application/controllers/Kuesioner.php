<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kuesioner_model', 'kuesioner');
        $this->load->library('form_validation');

    }


    public function index()
    {
        $data['title'] = 'Halaman Kuesioner';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kuesioner'] = $this->kuesioner->getAllKuesioner();

        if( $this->input->post('keyword')) {
            $data['kuesioner'] = $this->kuesioner->cariDataKuesioner();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuesioner/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Kuesioner';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuesioner/tambah', $data);
        $this->load->view('templates/footer');
    }
}
