<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_invoice extends CI_Model
{
	public function pick_up()
	{
		date_default_timezone_set('Asia/Jakarta');
		$order_id = $this->input->post('order_id');
		$id_user = $this->input->post('id_user');
		$name = $this->input->post('name');
		$alamat = $this->input->post('alamat');
		$tujuan = $this->input->post('tujuan');
		$city = $this->input->post('kota');
		$kode_pos = $this->input->post('kode_pos');
		$no_rekening = $this->input->post('no_rekening');
		$pendapatan = $this->input->post('pendapatan');
		$biaya = $this->input->post('biaya');
		$layanan_pesanan = $this->input->post('layanan_pesanan');
		$mobile_phone = $this->input->post('mobile_phone');
		$keterangan = $this->input->post('keterangan');
		$tracking_id = $this->input->post('tracking_id');
		$email = $this->input->post('email');
		$status = $this->input->post('status');
		$file_gambar = $_FILES['file_gambar']['name'];
		$result = $this->db->query("SELECT SUM(poin) AS poin FROM user WHERE user.id_user='$id_user'");
		$poin = $result->row()->poin; // Get the poin value from the result

		// $pay = $this->input->post('pay');
		// $pay_bank = $this->input->post('pay_bank');
		// $pay_dompet = $this->input->post('pay_dompet');

		// if ($pay !== null && $pay_bank !== null) {
		// 	$payment_method = $pay_bank;
		// }else if($pay !== null && $pay_dompet !== null) {
		// 	$payment_method = $pay_dompet;
		// } elseif ($pay !== null) {
		// 	$payment_method = $pay;
		// } else {
		// 	// Handle the case when the conditions are not met
		// 	$payment_method = null;
		// }

		$metode_bayar = $this->input->post('metode_bayar');
		$metode_bayar1 = $this->input->post('metode_bayar1');
		$metode_bayar2 = $this->input->post('metode_bayar2');
		$metode_bayar3 = $this->input->post('metode_bayar3');
		$metode_bayar4 = $this->input->post('metode_bayar4');
		
		if ($metode_bayar1 !== null && $metode_bayar3 !== null) {
			$no_rekening = $metode_bayar1 . ' - ' . $metode_bayar3;
		} else if ($metode_bayar2 !== null && $metode_bayar4 !== null) {
			$no_rekening = $metode_bayar2 .' - ' . $metode_bayar4;
		}else if ($metode_bayar !== null) {
			$no_rekening = $metode_bayar;
		} else {
			// Handle the case when the conditions are not met
			$no_rekening = null;
		}
		
		if ($file_gambar = '') {
		} else {
			$config['upload_path'] = './uploads/order';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']             = 2048;
            $config['max_width']            = 40000;
            $config['max_height']           = 40000;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_gambar')) {
				echo "File tidak dapat di upload!";
				$_SESSION["warning"] = 'Gambar Belum di Upload!!';
				redirect('dashboard/pick_up');
			} else {
				$file_gambar = $this->upload->data('file_name');
			}
		}
		$invoice = array (
			'order_id' 			=> $order_id,
			'id_user' 			=> $id_user,
			'name' 				=> $name,
			'alamat' 			=> $alamat,
			'tujuan' 			=> $tujuan,
			'city' 				=> $city,
			'kode_pos' 			=> $kode_pos,
			'no_rekening' 		=> $no_rekening,
			'pendapatan' 		=> $pendapatan,
			'biaya' 			=> $biaya,
			'layanan_pesanan' 	=> $layanan_pesanan,
			'mobile_phone' 		=> $mobile_phone,
			'keterangan' 		=> $keterangan,
			'file_gambar' 		=> $file_gambar,
			'tracking_id' 		=> $tracking_id,
			'email' 			=> $email,
			'status' 			=> $status,
			'transaction_time' 	=> date('Y-m-d H:i:s'),
			'payment_limit' 	=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);

		// die(var_dump($invoice));

		$this->db->insert('transaction', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array (
				'id_invoice' 	=> $order_id,
				'id_user' 		=> $id_user,
				'id_brg' 		=> $item['id'],
				'nama_brg' 		=> $item['name'],
				'jumlah' 		=> $item['qty'],
				'harga' 		=> $item['price'],
				'poin' 			=> $item['poin']
			);

						
			$tambah_poin = array(
				'poin' => $poin + ($item['poin'] *  $item['qty'])
			);

			$where = array(
				'id_user' 		=> $id_user,
			);

			$this->db->insert('cart', $data);
			$this->db->update('user', $tambah_poin, $where);

		}

		return TRUE;

	}
	public function drop_off()
	{
		date_default_timezone_set('Asia/Jakarta');
		$order_id = $this->input->post('order_id');
		$id_user = $this->input->post('id_user');
		$name = $this->input->post('name');
		$alamat = $this->input->post('alamat');
		$kode_pos = $this->input->post('kode_pos');
		$pendapatan = $this->input->post('pendapatan');
		$city = $this->input->post('kota');
		$tujuan = $this->input->post('ekspedisi');
		$keterangan = $this->input->post('keterangan');
		$biaya = $this->input->post('biaya');
		$layanan_pesanan = $this->input->post('layanan_pesanan');
		$mobile_phone = $this->input->post('mobile_phone');
		$tracking_id = $this->input->post('tracking_id');
		$email = $this->input->post('email');
		$status = $this->input->post('status');
		$file_gambar = $_FILES['file_gambar']['name'];
		$result = $this->db->query("SELECT SUM(poin) AS poin FROM user WHERE user.id_user='$id_user'");
		$poin = $result->row()->poin; // Get the poin value from the result
		
		$metode_bayar1 = $this->input->post('metode_bayar1');
		$metode_bayar2 = $this->input->post('metode_bayar2');
		$metode_bayar3 = $this->input->post('metode_bayar3');
		$metode_bayar4 = $this->input->post('metode_bayar4');
		
		if ($metode_bayar1 !== null && $metode_bayar3 !== null) {
			$no_rekening = $metode_bayar1 . ' - ' . $metode_bayar3;
		} elseif ($metode_bayar2 !== null && $metode_bayar4 !== null) {
			$no_rekening = $metode_bayar2 .' - ' . $metode_bayar4;
		} else {
			// Handle the case when the conditions are not met
			$no_rekening = null;
		}

		if ($file_gambar = '') {
		} else {
			$config['upload_path'] = './uploads/order';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']             = 2048;
            $config['max_width']            = 40000;
            $config['max_height']           = 40000;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_gambar')) {
				echo "File tidak dapat di upload!";
				$_SESSION["warning"] = 'Gambar Belum di Upload!!';
				redirect('dashboard/drop_off');
			} else {
				$file_gambar = $this->upload->data('file_name');
			}
		}
		$invoice = array (
			'order_id' 			=> $order_id,
			'id_user' 			=> $id_user,
			'name' 				=> $name,
			'alamat' 			=> $alamat,
			'kode_pos' 			=> $kode_pos,
			'city' 				=> $city,
			'tujuan' 			=> $tujuan,
			'keterangan' 		=> $keterangan,
			'no_rekening' 		=> $no_rekening,
			'pendapatan' 		=> $pendapatan,
			'biaya' 			=> $biaya,
			'layanan_pesanan' 	=> $layanan_pesanan,
			'mobile_phone' 		=> $mobile_phone,
			'file_gambar' 		=> $file_gambar,
			'tracking_id' 		=> $tracking_id,
			'email' 			=> $email,
			'status' 			=> $status,
			'transaction_time' 	=> date('Y-m-d H:i:s'),
			'payment_limit' 	=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 7, date('Y'))),
		);
				// die(var_dump($invoice));

		$this->db->insert('transaction', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array (
				'id_invoice' 	=> $order_id,
				'id_user' 		=> $id_user,
				'id_brg' 		=> $item['id'],
				'nama_brg' 		=> $item['name'],
				'jumlah' 		=> $item['qty'],
				'harga' 		=> $item['price'],
				'poin' 			=> $item['poin']
			);
						
			$tambah_poin = array(
				'poin' => $poin + ($item['poin'] *  $item['qty'])
			);
			$where = array(
				'id_user' 		=> $id_user,
			);

			$this->db->insert('cart', $data);
			$this->db->update('user', $tambah_poin, $where);

		}

		return TRUE;

	}

	public function get()
	{
		$result = $this->db->get('transaction');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}

	public function get_id_invoice($id_invoice)
	{
		$result = $this->db->where('order_id', $id_invoice)->limit(1)->get('transaction');
		if ($result->num_rows() > 0){
			return $result->row();
		} else {
			return false;
		}
	}

	public function get_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('cart');
		if ($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}
}