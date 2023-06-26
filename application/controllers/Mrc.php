<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mrc extends CI_Controller
{

    public function index()
    {
        $cek['currentPage'] = 'home';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function profil()
    {
        $cek['currentPage'] = 'profil';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('profil');
        $this->load->view('template/footer');
    }

    public function visi_misi()
    {
        $cek['currentPage'] = 'visi_misi';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('visi_misi');
        $this->load->view('template/footer');
    }

    public function produk()
    {
        $cek['currentPage'] = 'produk';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('produk');
        $this->load->view('template/footer');
    }

    public function sejarah()
    {
        $cek['currentPage'] = 'sejarah';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('sejarah');
        $this->load->view('template/footer');
    }

    public function kontak()
    {
        $cek['currentPage'] = 'kontak';
        $this->load->view('template/head');
        $this->load->view('template/navbar', $cek);
        $this->load->view('template/sidebar');
        $this->load->view('kontak');
        $this->load->view('template/footer');
    }
}
