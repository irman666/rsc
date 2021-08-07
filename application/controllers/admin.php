<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['tittle'] = 'Dasbord Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function biodata_user()
    {
        $data['tittle'] = 'Biodata Pasien';
        $data['biodata'] = $this->db->get_where('biodata', ['name_bio' => $this->session->userdata('name_bio')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/biodata_user', $data);
        $this->load->view('templates/footer', $data);
    }
}
