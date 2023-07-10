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

        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM penarikan 
            WHERE penarikan.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM penarikan 
            WHERE penarikan.id_user='$id' AND penarikan.platform='gopay'")->result();

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
    
        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM penarikan 
            WHERE penarikan.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM penarikan 
            WHERE penarikan.id_user='$id' AND penarikan.platform='dana'")->result();
            
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

        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM penarikan 
            WHERE penarikan.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM penarikan 
            WHERE penarikan.id_user='$id' AND penarikan.platform='ovo'")->result();

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

        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM penarikan 
            WHERE penarikan.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM penarikan 
            WHERE penarikan.id_user='$id' AND penarikan.platform='shopee pay'")->result();

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

        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM donasi 
            WHERE donasi.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM donasi 
            WHERE donasi.id_user='$id' AND donasi.platform='qurban'")->result();

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

        $data['nominal'] = $this->db->query("SELECT SUM(poin) AS poin FROM donasi 
            WHERE donasi.id_user='$id'")->result();

        $data['riwayat'] = $this->db->query("SELECT * FROM donasi 
            WHERE donasi.id_user='$id' AND donasi.platform='galang dana pembangunan'")->result();

        $this->load->view('layout/user/header', $data);
		$this->load->view('galang_dana_pembangunan', $data);
		$this->load->view('layout/user/footer');
    }

    // Fungsi penukaran poin
    public function tukar_dana()
    {
		$id_user = $this->input->post('id_user');
		$jumlah_penarikan = $this->input->post('jumlah_penarikan');
		$dana = $this->input->post('dana');
		$no_tujuan = $this->input->post('no_tujuan');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $dana);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/dana');
        }else if($poin <= $total){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/dana');
        }else if($dana > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/dana');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'jumlah_penarikan' => $jumlah_penarikan,
                'no_tujuan'        => $no_tujuan,
                'platform'        => $platform,
                'poin'             => $dana
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($current_poin));
            $this->db->insert('penarikan', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/dana');
        };

    }
    public function tukar_gopay()
    {
		$id_user = $this->input->post('id_user');
		$jumlah_penarikan = $this->input->post('jumlah_penarikan');
		$gopay = $this->input->post('gopay');
		$no_tujuan = $this->input->post('no_tujuan');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $gopay);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/gopay');
        }else if($poin <= $total){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/gopay');
        }else if($gopay > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/gopay');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'jumlah_penarikan' => $jumlah_penarikan,
                'no_tujuan'        => $no_tujuan,
                'platform'        => $platform,
                'poin'             => $gopay
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($current_poin));
            $this->db->insert('penarikan', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/gopay');
        };

    }
    public function tukar_shopee_pay()
    {
		$id_user = $this->input->post('id_user');
		$jumlah_penarikan = $this->input->post('jumlah_penarikan');
		$shopee_pay = $this->input->post('shopee_pay');
		$no_tujuan = $this->input->post('no_tujuan');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $shopee_pay);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/shopee_pay');
        }else if($poin <= $total){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/shopee_pay');
        }else if($shopee_pay > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
            redirect('/tukar_poin/shopee_pay');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'jumlah_penarikan' => $jumlah_penarikan,
                'no_tujuan'        => $no_tujuan,
                'platform'        => $platform,
                'poin'             => $shopee_pay
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($current_poin));
            $this->db->insert('penarikan', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/shopee_pay');
        };

    }
    public function tukar_ovo()
    {
		$id_user = $this->input->post('id_user');
		$jumlah_penarikan = $this->input->post('jumlah_penarikan');
		$ovo = $this->input->post('ovo');
		$no_tujuan = $this->input->post('no_tujuan');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $ovo);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/ovo');
        }else if($poin <= $total){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/ovo');
        }else if($ovo > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
            redirect('/tukar_poin/ovo');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'jumlah_penarikan' => $jumlah_penarikan,
                'no_tujuan'        => $no_tujuan,
                'platform'        => $platform,
                'poin'             => $ovo
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($current_poin));
            $this->db->insert('penarikan', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/ovo');
        };

    }

    // function donasi
    public function donasi_qurban()
    {
        $id_user = $this->input->post('id_user');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$nominal = $this->input->post('nominal');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $nominal);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/qurban');
        }else if($nominal < '100'){
            echo "Minimal Donasi 100 poin";
            $_SESSION["warning"] = 'Minimal Donasi 100 poin';
		    redirect('/tukar_poin/qurban');
        }else if($nominal > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/qurban');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'name'             => $name,
                'email'            => $email,
                'platform'         => $platform,
                'poin'             => $nominal
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($data));
            $this->db->insert('donasi', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/qurban');
        };
    }

    public function donasi_galang_dana_pembangunan()
    {
        $id_user = $this->input->post('id_user');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$nominal = $this->input->post('nominal');
		$platform = $this->input->post('platform');
		$poin = $this->input->post('poin');

        $total = abs($poin - $nominal);
        if($poin == '0'){
            echo "Point Anda Kosong";
            $_SESSION["warning"] = 'Poin Anda Kosong';
		    redirect('/tukar_poin/galang_dana_pembangunan');
        }else if($nominal < '100'){
            echo "Minimal Donasi 100 poin";
            $_SESSION["warning"] = 'Minimal Donasi 100 poin';
		    redirect('/tukar_poin/galang_dana_pembangunan');
        }else if($nominal > $poin){
            echo "Point Anda Kurang";
            $_SESSION["warning"] = 'Poin Anda Kurang';
		    redirect('/tukar_poin/galang_dana_pembangunan');
        }else{
            $data = array(
                'id_user'          => $id_user,
                'name'             => $name,
                'email'            => $email,
                'platform'         => $platform,
                'poin'             => $nominal
            );
            $current_poin = array(
                'poin'             => $total
            );
            $where = array(
                'id_user' => $id_user
            );
            // die(var_dump($total));
            $this->db->insert('donasi', $data, $where);
            $this->db->update('user', $current_poin, $where);
            $_SESSION["sukses"] = 'Poin berhasil di tukar';
            redirect('/tukar_poin/galang_dana_pembangunan');
        };

    }
}