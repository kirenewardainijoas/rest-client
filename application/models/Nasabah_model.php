<?php

class Nasabah_model extends CI_model
{
    public function getAllNasabah()
    {
        return $this->db->get('nasabah')->result_array();
    }

    public function tambahDataNabah()
    {
        $data = [
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "email" => $this->input->post('email', true),
            "gender" => $this->input->post('gender', true)
        ];

        $this->db->insert('nasabah', $data);
    }

    public function hapusDataNasabah($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('nasabah', ['id' => $id]);
    }

    public function getNasabahById($id)
    {
        return $this->db->get_where('nasabah', ['id' => $id])->row_array();
    }

    public function ubahDataNasabah()
    {
        $data = [
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "email" => $this->input->post('email', true),
            "gender" => $this->input->post('gender', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('nasabah', $data);
    }

    public function cariDataNasabah()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('first_name', $keyword);
        $this->db->or_like('last_name', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('gender', $keyword);
        return $this->db->get('nasabah')->result_array();
    }
}
