<?php

class  Kegiatan_model extends CI_model
{
   public function getAllKegiatan()
{
   return $this->db->get('kegiatan')->result_array();
}
    public function tambahDataKegiatan()
    {
       $data = [
          "nama" => $this->input->post('nama', true),
          "tanggal_awal" => $this->input->post('tgl_awal', true),
          "tanggal_akhir" => $this->input->post('tgl_akhir', true),
          "alamat" => $this->input->post('alamat', true),
          "galeri" => $this->input->post('gambar', true),
       ];
 
       $this->db->insert('kegiatan',  $data);
 
    }

    public function hapusDataKegiatan($id)
    {
      //$this->db->where('id', $id);
      $this->db->delete('kegiatan', ['id' => $id ]);
    }

    public function getKegiatanById($id)
    {
       return $this->db->get_where('kegiatan', ['id' => $id])->row_array();
    }

    public function ubahDataKegiatan()
    {
       $data = [
          "nama" => $this->input->post('nama', true),
          "tanggal_awal" => $this->input->post('tgl_awal', true),
          "tanggal_akhir" => $this->input->post('tgl_akhir', true),
          "alamat" => $this->input->post('alamat', true),
          "galeri" => $this->input->post('gambar', true)
       ];
 
       $this->db->where('id', $this->input->post('id'));
       $this->db->update('kegiatan',  $data);
 
    }

    public function cariDataKegiatan()
    {
       $keyword = $this->input->post('keyword', true);
       $this->db->like('nama', $keyword);
       return $this->db->get('kegiatan')->result_array();
    }
  
    public function getKegiatan($limit, $start)
    {
     return $this->db->get('kegiatan', $limit, $start)->result_array();
  
    }

    public function countAllKegiatan()
    {
       return $this->db->get('Kegiatan')->num_rows();
    }
  
}