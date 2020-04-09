<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function ceknum($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}

	public function ceknum_alumni($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('alumni');
	}
}