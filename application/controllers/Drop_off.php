<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drop_off extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != '2') {
            redirect('welcome');
		}
    }

    public function index()
    {
        $data['title'] = 'Drop Off';
		$this->load->view('layout/user/header', $data);
		$this->load->view('drop_off', $data);
		$this->load->view('layout/user/footer');
    }
}