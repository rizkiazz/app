<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_categories extends CI_Controller
{
	public function plastik()
	{
		$data['title'] = ' Plastik ';
		$data['plastik'] = $this->model_kategori->plastik()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('plastik', $data);
		$this->load->view('layout/user/footer');
	}

	public function kertas()
	{
		$data['title'] = ' Kertas ';
		$data['kertas'] = $this->model_kategori->kertas()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kertas', $data);
		$this->load->view('layout/user/footer');
	}

	public function kaca()
	{
		$data['title'] = ' Kaca ';
		$data['kaca'] = $this->model_kategori->kaca()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kaca', $data);
		$this->load->view('layout/user/footer');
	}

	public function elektronik()
	{
		$data['title'] = ' Elektronik ';
		$data['elektronik'] = $this->model_kategori->elektronik()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('elektronik', $data);
		$this->load->view('layout/user/footer');
	}

	public function tekstil()
	{
		$data['title'] = ' Tekstil ';
		$data['tekstil'] = $this->model_kategori->tekstil()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('tekstil', $data);
		$this->load->view('layout/user/footer');
	}
}
