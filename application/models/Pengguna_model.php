<?php

class Pengguna_model extends CI_model
{
   public function getAllPengguna()
{
   return $this->db->get('pengguna')->result_array();
}
    public function tambahDataPengguna()
    {
       $data = [
          "nama" => $this->input->post('nama', true),
          "email" => $this->input->post('email', true),
          "usia" => $this->input->post('usia', true),
          "jenis_kelamin" => $this->input->post('jk', true),
          "pekerjaan" => $this->input->post('pekerjaan', true),
          "no_telepon" => $this->input->post('no_telepon', true),
          "alamat" => $this->input->post('alamat', true)
       ];
 
       $this->db->insert('pengguna',  $data);
 
    }

    public function hapusDataPengguna($id)
    {
     // $this->db->where('id', $id);
      $this->db->delete('pengguna', ['id' => $id ]);
    }

    public function getPenggunaById($id)
  {
     return $this->db->get_where('pengguna', ['id' => $id])->row_array();
  }

  public function ubahDataPengguna()
  {
     $data = [
        "nama" => $this->input->post('nama', true),
        "email" => $this->input->post('email', true),
        "usia" => $this->input->post('usia', true),
        "jenis_kelamin" => $this->input->post('jk', true),
        "pekerjaan" => $this->input->post('pekerjaan', true),
        "no_telepon" => $this->input->post('no_telepon', true),
        "alamat" => $this->input->post('alamat', true)
     ];

     $this->db->where('id', $this->input->post('id'));
     $this->db->update('pengguna',  $data);

  }

  public function cariDataPengguna()
  {
     $keyword = $this->input->post('keyword', true);
     $this->db->like('nama', $keyword);
     $this->db->or_like('email', $keyword);
     return $this->db->get('pengguna')->result_array();
  }

  public function getPengguna($limit, $start)
  {
   return $this->db->get('pengguna', $limit, $start)->result_array();

  }

  public function countAllPengguna()
  {
     return $this->db->get('pengguna')->num_rows();
  }

}