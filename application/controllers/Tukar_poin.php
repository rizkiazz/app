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
    public function galang_dana_pembangunan()
    {
        $data['title'] = 'Galang Dana Pembagunan | Donasi Koin';

        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['point'] = $this->db->query("SELECT SUM(harga) AS harga FROM cart 
			WHERE cart.id_user='$id'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('galang_dana_pembangunan', $data);
		$this->load->view('layout/user/footer');
    }
    public function tukar_dana()
    {
		$id_user = $this->input->post('id_user');
		$jumlah_penarikan = $this->input->post('jumlah_penarikan');
		$dana = $this->input->post('dana');
		$no_tujuan = $this->input->post('no_tujuan');
		$poin = $this->input->post('poin');

        $total = $poin - $dana;
        if($poin = 0){
            echo "Point Anda Kosong";
        }else if($poin >= $total){
            echo "Point Anda Kurang";
        }else{

            $data = array(
                'id_user'          => $id_user,
                'jumlah_penarikan' => $jumlah_penarikan,
                'no_tujuan'        => $no_tujuan,
                'poin'             => $total
            );
            // die(var_dump($data));
            $this->db->insert('penarikan', $data);
        };

		$_SESSION["sukses"] = 'Poin berhasil di tukar';
		redirect('/tukar_poin/dana');
    }
}