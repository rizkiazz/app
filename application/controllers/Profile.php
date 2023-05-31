<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $data['title'] = 'My Profile';
        $id = $this->session->userdata('id_user');
        $data['profile'] = $this->db->query("SELECT * FROM user 
			WHERE user.id_user='$id'")->result();

        $data['bill'] = $this->db->query("SELECT * FROM transaction 
        WHERE transaction.id_user='$id' AND status='0' LIMIT 3")->result();

        $this->load->view('layout/user/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('layout/user/footer');
    }

    public function update()
    {
        $id             = $this->input->post('id_user');
        $nama_user      = $this->input->post('nama_user');
        $email          = $this->input->post('email');
        $alamat         = $this->input->post('alamat');
        $nomor_hp       = $this->input->post('nomor_hp');
        $gender         = $this->input->post('gender');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $avatar		    = $_FILES['avatar']['name'];


        $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;

		$this->load->library('upload', $config);
        if ($avatar = '') {
		} else {
			if (!$this->upload->do_upload('avatar')) {
				echo "File tidak dapat di upload!";
			} else {
				$avatar = $this->upload->data('file_name');
			}
		}

        $data = array(
            'nama_user'         => $nama_user,
            'email'             => $email,
            'alamat'            => $alamat,
            'nomor_hp'          => $nomor_hp,
            'gender'            => $gender,
            'tgl_lahir'         => $tgl_lahir,
            'avatar'            => $avatar
            );                         

        $where = array(
            'id_user' => $id
        );
        // die(var_dump($data)); //giving posted value    

        $this->model_pembayaran->update('user', $data, $where);
        $_SESSION["sukses"] = 'Data berhasil di ubah';
        redirect('profile');
    }
}
