<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['tittle'] = 'Halaman User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/u_header', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('templates/u_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/u_footer', $data);
    }

    public function form_soap()
    {
        $data['tittle'] = 'Form Soap';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name_pasien', 'Name_pasien', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jk', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('bb', 'Bb', 'required|trim');
        $this->form_validation->set_rules('tb', 'Tb', 'required|trim');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Halaman SOAP';
            $this->load->view('templates/u_header', $data);
            $this->load->view('templates/u_sidebar', $data);
            $this->load->view('templates/u_topbar', $data);
            $this->load->view('user/form_soap', $data);
            $this->load->view('templates/u_footer', $data);
        } else {

            $data = [
                'name_pasien' => htmlspecialchars($this->input->post('name_pasien', true)),
                'umur' => htmlspecialchars($this->input->post('umur', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'bb' => htmlspecialchars($this->input->post('bb', true)),
                'tb' => htmlspecialchars($this->input->post('tb', true)),
                'keluhan' => htmlspecialchars($this->input->post('keluhan', true)),



            ];

            $this->db->insert('form_soap', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat anda telah mengisi SOAP!</div');
            redirect('user/form_soap');
        }
    }

    public function biodata()
    {
        $data['tittle'] = 'Form Biodata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name_bio', 'Name_bio', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Ttl', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jk', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Halaman Biodata';
            $this->load->view('templates/u_header', $data);
            $this->load->view('templates/u_sidebar', $data);
            $this->load->view('templates/u_topbar', $data);
            $this->load->view('user/biodata', $data);
            $this->load->view('templates/u_footer', $data);
        } else {

            $data = [
                'name_bio' => htmlspecialchars($this->input->post('name_bio', true)),
                'ttl' => htmlspecialchars($this->input->post('ttl', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),


            ];

            $this->db->insert('biodata', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat anda telah mengisi biodata!</div');
            redirect('user/biodata');
        }
    }
}
