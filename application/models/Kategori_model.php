<?php

class  Kategori_model extends CI_model
{
   public function getAllKategori()
{
   return $this->db->get('kategori')->result_array();
}
    public function tambahDataKategori()
    {
       $data = [
          "nama" => $this->input->post('nama', true)
          
       ];
 
       $this->db->insert('kategori',  $data);
 
    }

    public function hapusDataKategori($id)
    {
     // $this->db->where('id', $id);
      $this->db->delete('kategori', ['id' => $id ]);

    }

    public function getKategoriById($id)
  {
     return $this->db->get_where('kategori', ['id' => $id])->row_array();
  }

  public function ubahDataKategori()
  {
     $data = [
        "nama" => $this->input->post('nama', true),
        
     ];

     $this->db->where('id', $this->input->post('id'));
     $this->db->update('kategori',  $data);

  }

  public function cariDataKategori()
  {
     $keyword = $this->input->post('keyword', true);
     $this->db->like('nama', $keyword);
     return $this->db->get('kategori')->result_array();
  }

  public function getKategori($limit, $start)
  {
   return $this->db->get('kategori', $limit, $start)->result_array();

  }

  public function countAllKategori()
  {
     return $this->db->get('kategori')->num_rows();
  }

}