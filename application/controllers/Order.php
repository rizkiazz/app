<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
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
		$data['title'] = 'History Order';
		$id = $this->session->userdata('id_user');
		$data['pickOff'] = $this->db->query("SELECT * FROM transaction 
			WHERE transaction.id_user='$id' AND layanan_pesanan='Pick Up' ORDER BY status, transaction_time  ASC")->result();
		$data['dropOff'] = $this->db->query("SELECT * FROM transaction 
			WHERE transaction.id_user='$id' AND layanan_pesanan='Drop Off' ORDER BY status, transaction_time ASC")->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('order', $data);
		$this->load->view('layout/user/footer');
	}

	public function detail($id_invoice)
	{
		$data['title'] = 'Detail Order';
		$data['invoice'] = $this->model_invoice->get_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->get_id_pesanan($id_invoice);
		$this->load->view('layout/user/header', $data);
		$this->load->view('order_detail', $data);
		$this->load->view('layout/user/footer');
	}
}