<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$data['title'] = 'Dashboard User';
		$data['product_category'] = $this->db->query("SELECT DISTINCT kategori, gambar FROM product;")->result();

		$this->load->view('layout/user/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/user/footer');
	}

	public function cart($id)
	{
		$product = $this->model_pembayaran->find($id);

		$data = array(
			'id'      => $product->id_brg,
			'qty'     => 1,
			'price'   => $product->harga,
			'poin'   => $product->poin,
			'name'    => $product->nama_brg,
			'options' => array(
				'keterangan' => $product->keterangan,
				'kategori' => $product->kategori,
				'gambar' => $product->gambar
			)
		);

		$this->cart->insert($data);
		$_SESSION["sukses"] = 'Pesanan telah disimpan di keranjang';
		redirect('dashboard_categories/'. $product->kategori);
	}

	 public function detail_product($id)
    {
        $where = array('id_brg' => $id);
        $data['detail'] = $this->db->query("SELECT * FROM product WHERE id_brg='$id'")->result();
        $data['title'] = "Detail Product";
        $this->load->view('layout/user/header', $data);
		$this->load->view('detail_product', $data);
		$this->load->view('layout/user/footer');
    }

	public function detail_cart()
	{
		$data['title'] = 'Detail Cart';
		$this->load->view('layout/user/header', $data);
		$this->load->view('cart', $data);
		$this->load->view('layout/user/footer');
	}
	public function update_cart()
	{
		$no = 1;
		foreach ($this->cart->contents() as $items){
			$data = array(
			'rowid' => $items['rowid'],
			'qty' => $this->input->post('quantity' . $no++)
			);
			// die(var_dump($data));
			$this->cart->update($data);
		}
		$_SESSION["sukses"] = 'Pesanan berhasil di ubah';
		redirect('dashboard/detail_cart');


	}

	public function drop_off()
    {
        $data['title'] = 'Drop Off';
		$id = $this->session->userdata('id_user');
        $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user='$id'")->row();

		$this->load->view('layout/user/header', $data);
		$this->load->view('drop_off', $data);
		$this->load->view('layout/user/footer');
    }
	public function pick_up()
    {
        $data['title'] = 'Pick Up';
		$id = $this->session->userdata('id_user');
        $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user='$id'")->row();
		$this->load->view('layout/user/header', $data);
		$this->load->view('pick_up', $data);
		$this->load->view('layout/user/footer');
    }

	public function checkout()
	{
		$data['title'] = 'Checkout Product';
		$this->load->view('layout/user/header', $data);
		$this->load->view('checkout', $data);
		$this->load->view('layout/user/footer');
	}

	// public function checkout_proccess()
	// {
	// 	$data['title'] = 'Payment Notification';
	// 	$is_processed = $this->model_invoice->index();
	// 	if ($is_processed) {
	// 		$this->cart->destroy();
	// 		$this->load->view('layout/user/header', $data);
	// 		$this->load->view('success_pay', $data);
	// 		$this->load->view('layout/user/footer');
	// 	} else {
	// 		echo "Maaf, Pesanan Anda Gagal Di Proses!";
	// 	}
	// }

	public function pick_up_proccess()
	{
		$data['title'] = 'Notifikasi Pick Up Order';
		$is_processed = $this->model_invoice->pick_up();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('layout/user/header', $data);
			$this->load->view('success_pay', $data);
			$this->load->view('layout/user/footer');
		} else {
			echo "Maaf, Pesanan Anda Gagal Di Proses!";
		}
	}

	public function drop_off_proccess()
	{
		$data['title'] = 'Notifikasi Drop Off Order';
		$is_processed = $this->model_invoice->drop_off();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('layout/user/header', $data);
			$this->load->view('success_pay', $data);
			$this->load->view('layout/user/footer');
		} else {
			echo "Maaf, Pesanan Anda Gagal Di Proses!";
		}
	}

	public function clear()
	{
		$this->cart->destroy();
		$_SESSION["sukses"] = 'Pesanan berhasil di hapus';
		redirect('dashboard/detail_cart');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		$_SESSION["sukses"] = 'Pesanan berhasil di hapus';
		redirect('dashboard/detail_cart');
	}
}