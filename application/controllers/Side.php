<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Side extends CI_Controller
{

    public function article()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('side/article');
        $this->load->view('template/footer');
    }

    public function event()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('side/event');
        $this->load->view('template/footer');
    }

    public function galery()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('side/galery');
        $this->load->view('template/footer');
    }

    public function member()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('side/member');
        $this->load->view('template/footer');
    }
}
