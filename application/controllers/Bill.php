<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bill extends CI_Controller
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
		$data['title'] = 'Billing History';
		$id = $this->session->userdata('id_user');
		$data['bill_pickUp'] = $this->db->query("SELECT * FROM transaction 
			WHERE transaction.id_user='$id' AND status='0' AND layanan_pesanan='Pick Up' ORDER BY transaction_time DESC")->result();
		$data['bill_dropOff'] = $this->db->query("SELECT * FROM transaction 
			WHERE transaction.id_user='$id' AND status='0' AND layanan_pesanan='Drop Off' ORDER BY transaction_time DESC")->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('bill', $data);
		$this->load->view('layout/user/footer');
	}

	public function detail($id_invoice)
	{
		$data['title'] = 'Detail Invoice';
		$data['invoice'] = $this->model_invoice->get_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->get_id_pesanan($id_invoice);
		$this->load->view('layout/user/header', $data);
		$this->load->view('invoice', $data);
		$this->load->view('layout/user/footer');
	}

	public function upload()
	{
		$id	= $this->input->post('order_id');
		$bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
		if ($bukti_pembayaran = '') {
		} else {
			$config['upload_path'] = './uploads/bukti_pembayaran/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 40000;
			$config['max_height']           = 40000;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('bukti_pembayaran')) {
				echo "File tidak dapat di upload!";
			} else {
				$bukti_pembayaran = $this->upload->data('file_name');
			}
		}

		$data = array(
			'bukti_pembayaran' 	=> $bukti_pembayaran
		);
		
		$where = array(
			'order_id' => $id
		);
		// die(var_dump($data, $where));

		$this->model_pembayaran->update('transaction', $data, $where);
		$_SESSION["sukses"] = 'Bukti transfer berhasil di upload';
		redirect('bill');
	}
}