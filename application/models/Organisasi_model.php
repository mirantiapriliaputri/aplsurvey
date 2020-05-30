<?php

class Organisasi_model extends CI_model
{
   public function getAllOrganisasi()
{
   return $this->db->get('organisasi')->result_array();
}
    public function tambahDataOrganisasi()
    {
       $data = [
          "nama" => $this->input->post('nama', true),
          
       ];
 
       $this->db->insert('organisasi',  $data);
 
    }

    public function hapusDataOrganisasi($id)
    {
     // $this->db->where('id', $id);
      $this->db->delete('organisasi', ['id' => $id ]);
    }

  public function getOrganisasiById($id)
  {
     return $this->db->get_where('organisasi', ['id' => $id])->row_array();
  }

  public function ubahDataOrganisasi()
  {
     $data = [
        "nama" => $this->input->post('nama', true)
        
     ];

     $this->db->where('id', $this->input->post('id'));
     $this->db->update('organisasi',  $data);

  }

  public function cariDataOrganisasi()
  {
     $keyword = $this->input->post('keyword', true);
     $this->db->like('nama', $keyword);
     return $this->db->get('organisasi')->result_array();
  }

  public function getOrganisasi($limit, $start)
  {
   return $this->db->get('organisasi', $limit, $start)->result_array();

  }

  public function countAllOrganisasi()
  {
     return $this->db->get('organisasi')->num_rows();
  }
 


}