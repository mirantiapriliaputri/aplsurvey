<?php

class Galeri_model extends CI_model{
  
   public function getAllGaleri()
{
   return $this->db->get('galeri')->result_array();
}

public function tambahDataGaleri()
{
   $data = [
      "nama" => $this->input->post('nama', true),
      "url" => $this->input->post('url', true)

   ];

   $this->db->insert('galeri',  $data);

}
public function hapusDataGaleri($id)
{
 // $this->db->where('id', $id);
  $this->db->delete('galeri', ['id' => $id ]);
}

public function getGaleriById($id)
{
 return $this->db->get_where('galeri', ['id' => $id])->row_array();
}

public function ubahDataGaleri()
{
   $data = [
      "nama" => $this->input->post('nama', true),
      "url" => $this->input->post('url', true)

   ];

   $this->db->where('id', $this->input->post('id'));
   $this->db->update('galeri',  $data);

}


public function cariDataGaleri()
{
   $keyword = $this->input->post('keyword', true);
   $this->db->like('nama', $keyword);
   $this->db->or_like('url', $keyword);
   return $this->db->get('galeri')->result_array();
}

public function getGaleri($limit, $start)
{
 return $this->db->get('galeri', $limit, $start)->result_array();

}

public function countAllGaleri()
{
   return $this->db->get('galeri')->num_rows();
}
}

