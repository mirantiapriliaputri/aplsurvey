<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model', 'galeri');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Galeri';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // load library
        $this->load->library('pagination');
        //config
        $config['total_rows'] = $this->galeri->countAllGaleri();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/survey/galeri/index';

        // styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');



        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['galeri'] = $this->galeri->getGaleri($config['per_page'], $data['start']);

        // $data['galeri'] = $this->galeri->getAllGaleri();


        if ($this->input->post('keyword')) {
            $data['galeri'] = $this->galeri->cariDataGaleri();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('galeri/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Galeri';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_galeri', 'Nama File', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('galeri/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->galeri->tambahDataGaleri();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('galeri');
        }
    }

    public function hapus($id)
    {
        $this->galeri->hapusDataGaleri($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('galeri');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Galeri';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->galeri->getGaleriById($id);


        $this->form_validation->set_rules('nama_galeri', 'Nama File', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('galeri/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->galeri->ubahDataGaleri();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('galeri');
        }
    }
}
