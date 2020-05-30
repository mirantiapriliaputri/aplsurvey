<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_model', 'pengguna');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data['title'] = 'Halaman Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
 
        // load library
       $this->load->library('pagination');
        //config
       $config['total_rows'] = $this->pengguna->countAllPengguna();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/survey/pengguna/index';

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
        $data['pengguna'] = $this->pengguna->getPengguna($config['per_page'], $data['start']);

       
        if( $this->input->post('keyword')) {
            $data['pengguna'] = $this->pengguna->cariDataPengguna();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengguna/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
            $data['title'] = 'Form Tambah Data Pengguna';
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();


            $data['pekerjaan'] = ['Guru', 'Dokter', 'Tentara', 'Polisi', 'Pelajar', 'Mahasiswa','Pilot', 'Pramugari'];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];

            

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('usia','Usia','required');
            $this->form_validation->set_rules('no_telepon','No Telepon','required|numeric');
            $this->form_validation->set_rules('alamat','Alamat','required');

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/tambah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->pengguna->tambahDataPengguna();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengguna');
            }
    }
    
    public function hapus($id)
    {
        $this->pengguna->hapusDataPengguna($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengguna');
    }

    public function ubah($id)
    {
            $data['title'] = 'Form Ubah Data Pengguna'; 
            $data['user'] = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();

            $data['pengguna'] = $this->pengguna->getPenggunaById($id);
            $data['pekerjaan'] = ['Guru', 'Dokter', 'Tentara', 'Polisi', 'Pelajar', 'Mahasiswa','Pilot', 'Pramugari'];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];


            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('usia','Usia','required');
            $this->form_validation->set_rules('no_telepon','No Telepon','required|numeric');
            $this->form_validation->set_rules('alamat','Alamat','required');

            if($this->form_validation->run() == FALSE){
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/ubah', $data);
            $this->load->view('templates/footer');

            } else {
                $this->pengguna->ubahDataPengguna();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('pengguna');
            }
    }
    
}

