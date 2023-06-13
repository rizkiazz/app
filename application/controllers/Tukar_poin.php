<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tukar_poin extends CI_Controller
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
        $data['title'] = 'Tukar Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['bill'] = $this->db->query("SELECT * FROM transaction 
        WHERE transaction.id_user='$id' AND status='0' LIMIT 3")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('tukar_poin', $data);
		$this->load->view('layout/user/footer');
    }
    public function gopay()
    {
        $data['title'] = 'Gopay | Tukar Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('gopay', $data);
		$this->load->view('layout/user/footer');
    }
    public function dana()
    {
        $data['title'] = 'Dana | Tukar Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('dana', $data);
		$this->load->view('layout/user/footer');
    }
    public function ovo()
    {
        $data['title'] = 'Ovo | Tukar Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('ovo', $data);
		$this->load->view('layout/user/footer');
    }
    public function shopee_pay()
    {
        $data['title'] = 'Shopee Pay | Tukar Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('shopee_pay', $data);
		$this->load->view('layout/user/footer');
    }
    public function qurban()
    {
        $data['title'] = 'Qurban | Donasi Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('qurban', $data);
		$this->load->view('layout/user/footer');
    }
}