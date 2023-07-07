<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pick_up extends CI_Controller
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
        $data['title'] = 'Pick Up';
		$id = $this->session->userdata('id_user');
		$this->load->view('layout/user/header', $data);
		$this->load->view('/dashboard/pick_up', $data);
		$this->load->view('layout/user/footer');
    }
}