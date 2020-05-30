<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Organisasi_model', 'organisasi');
        $this->load->library('form_validation');


    }

    public function index()
    {
        $data['title'] = 'Halaman Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
            // load library
            $this->load->library('pagination');
            //config
            $config['total_rows'] = $this->organisasi->countAllOrganisasi();
            $config['per_page'] = 5;
           
                $config['base_url'] = 'http://localhost/survey/organisasi/index';
              

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
            $data['organisasi'] = $this->organisasi->getOrganisasi($config['per_page'], $data['start']);


        if( $this->input->post('keyword')) {
            $data['organisasi'] = $this->organisasi->cariDataOrganisasi();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('organisasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
            $data['title'] = 'Form Tambah Data Organisasi';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('nama','Nama','required');
            

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('organisasi/tambah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->organisasi->tambahDataOrganisasi();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('organisasi');
     }
    }

    public function hapus($id)
    {
        $this->organisasi->hapusDataOrganisasi($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('organisasi');
    }

    public function ubah($id)
    {
            $data['title'] = 'Form Ubah Data Organisasi';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

            $data['organisasi'] = $this->organisasi->getOrganisasiById($id);


            $this->form_validation->set_rules('nama','Nama','required');
           

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('organisasi/ubah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->organisasi->ubahDataOrganisasi();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('organisasi');
            }
    }
    
}

