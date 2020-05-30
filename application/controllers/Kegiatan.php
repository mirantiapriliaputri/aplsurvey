<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->library('form_validation');


    }

    public function index()
    {
        $data['title'] = 'Halaman Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

          // load library
       $this->load->library('pagination');
       //config
      $config['total_rows'] = $this->kegiatan->countAllKegiatan();
                $config['per_page'] = 5;
            $config['base_url'] = 'http://localhost/survey/kegiatan/index';
            
            $config['num_links'] = 0;

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
       $data['kegiatan'] = $this->kegiatan->getKegiatan($config['per_page'], $data['start']);

        if( $this->input->post('keyword')) {
            $data['kegiatan'] = $this->kegiatan->cariDataKegiatan();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
            $data['title'] = 'Form Tambah Data kegiatan';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('tgl_awal','Tanggal awal','required');
            $this->form_validation->set_rules('tgl_akhir','Tanggal Akhir','required');
            $this->form_validation->set_rules('alamat','Alamat','required');

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/tambah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->kegiatan->tambahDataKegiatan();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('kegiatan');
          }
    }

    public function hapus($id)
    {
        $this->kegiatan->hapusDataKegiatan($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('kegiatan');
    }

    public function ubah($id)
    {
            $data['title'] = 'Form Ubah Data Kegiatan';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

            $data['kegiatan'] = $this->kegiatan->getKegiatanById($id);

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('tgl_awal','Tanggal awal','required');
            $this->form_validation->set_rules('tgl_akhir','Tanggal Akhir','required');
            $this->form_validation->set_rules('alamat','Alamat','required');

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/ubah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->kegiatan->ubahDatakegiatan();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('kegiatan');
            }
    }
    
}

