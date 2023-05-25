<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function plastik()
	{
		return $this->db->get_where('product', array('kategori' => 'Plastik'));
	}

	public function kertas()
	{
		return $this->db->get_where('product', array('kategori' => 'Kertas'));
	}

	public function kaca()
	{
		return $this->db->get_where('product', array('kategori' => 'Kaca'));
	}

	public function elektronik()
	{
		return $this->db->get_where('product', array('kategori' => 'Elektronik'));
	}

	public function tekstil()
	{
		return $this->db->get_where('product', array('kategori' => 'Tekstil'));
	}
	
}
