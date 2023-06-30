<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') != '1') {
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['title'] = 'List Product';
		$data['product'] = $this->model_pembayaran->get('product')->result();
		$data['bill'] = $this->db->query("SELECT * FROM transaction
        WHERE status='0' ORDER BY order_id DESC LIMIT 5")->result();

		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/product/view', $data);
		$this->load->view('layout/admin/footer');
	}

	public function add()
	{
		$data['title'] = 'Add Product';
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/product/add', $data);
		$this->load->view('layout/admin/footer');
	}

	public function insert()
	{
		$nama_brg 	= $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$kategori 	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$poin 		= $this->input->post('poin');
		$stok 		= $this->input->post('stok');
		$gambar		= $_FILES['gambar']['name'];
		if ($gambar = '') {
		} else {
			$config['upload_path'] 			= './uploads';
			$config['allowed_types'] 		= 'jpg|jpeg|png';
			$config['max_size']             = 2048; // 2MB
			$config['max_width']            = 40000; // batas lebar gambar dalam piksel
			$config['max_height']           = 40000; // batas tinggi gambar dalam piksel

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "File tidak dapat di upload!";
				$_SESSION["warning"] = 'Gambar tidak memenuhi syarat!!';
				redirect('admin/product/add');
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		// die(var_dump($gambar));

		$data = array(
			'nama_brg' 	=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori' 	=> $kategori,
			'harga' 	=> $harga,
			'poin' 	=> $poin,
			'stok' 	=> $stok,
			'gambar' 	=> $gambar
		);
		// die(var_dump($data));

		$this->model_pembayaran->insert($data, 'product');
		$_SESSION["sukses"] = 'Product berhasil di tambahkan';
		redirect('admin/product');
	}

	public function update($id)
	{
		$where = array('id_brg' => $id);
		$data['title'] = 'Update Product';
		$data['product'] = $this->db->query("SELECT * FROM product WHERE id_brg = '$id'")->result();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/product/update', $data);
		$this->load->view('layout/admin/footer');
	}

	public function insert_update()
	{
		$id				= $this->input->post('id_brg');
		$nama_brg 		= $this->input->post('nama_brg');
		$keterangan 	= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$harga 			= $this->input->post('harga');
		$poin 			= $this->input->post('poin');
		$stok 			= $this->input->post('stok');
        $gambar_product = $_FILES['gambar_product']['name'];


        if ($gambar_product != '') {
			$config['upload_path']          = './uploads/produk';
			$config['allowed_types']        = 'png|jpg|gif';
			$config['max_size']             = 2048;
			$config['max_width']            = 40000;
			$config['max_height']           = 40000;
	
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar_product')) {
				echo "File tidak dapat di upload!";
			} else {
				$gambar_product = $this->upload->data('file_name');
			}
		} else {
            $gambar_product = $this->input->post('old');
        };

		$data = array(
			'nama_brg' 		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori' 		=> $kategori,
			'harga' 		=> $harga,
			'poin' 		=> $poin,
			'stok' 			=> $stok,
			'gambar' 		=> $gambar_product

		);

		$where = array(
			'id_brg' => $id
		);
		// die(var_dump($data)); //giving posted value    


		$this->model_pembayaran->update('product', $data, $where);
		$_SESSION["sukses"] = 'Product berhasil di ubah';
		redirect('admin/product');
	}

	public function delete($id)
	{
		$where = array('id_brg' => $id);
		$product = $this->db->query("SELECT gambar FROM product WHERE product.id_brg='$id'")->row();

		if ($product) {
			$imagePath = FCPATH . '/uploads/produk/' . $product->gambar;
			if (isset($imagePath)) {
				if (unlink($imagePath)) {
					// File deletion successful
					echo 'Image deleted successfully.';
				} else {
					// File deletion failed
					echo 'Unable to delete the image.';
				}
			} else {
				// File does not exist
				echo 'Image file not found.';
			}
		}
		$this->model_pembayaran->delete($where, 'product');
		$_SESSION["sukses"] = 'Product berhasil dihapus';
		redirect('admin/product');

	}
}
