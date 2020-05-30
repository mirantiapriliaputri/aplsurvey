<?php

class Kuesioner_model extends CI_model
{
   public function getAllKuesioner()
{
   return $this->db->get('kuesioner')->result_array();
}

public function cariDataKuesioner()
  {
     $keyword = $this->input->post('keyword', true);
     return $this->db->get('kuesioner')->result_array();
  }

}