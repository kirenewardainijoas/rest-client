<?php

class Nasabah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nasabah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah();
        if ($this->input->post('keyword')) {
            $data['nasabah'] = $this->Nasabah_model->cariDataNasabah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('nabasah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Nasabah';

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('nasabah/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataNasabah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nasabah');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataNasabah($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('nasabah');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getNasabahById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('nasabah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getNasabahById($id);
        $data['gender'] = ['Male', 'Female'];

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('nasabah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->nasabah_model->ubahDataNasabah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('nasabah');
        }
    }
}
