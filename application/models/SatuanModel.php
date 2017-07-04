<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SatuanModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataSatuan()
	{
		$this->db->select("kdSatuan,nama");
		$query = $this->db->get('satuanbarang');
		return $query->result();
	}

	public function insertSatuan()
	{
		$object = array('nama' => $this->input->post('nama'));
		$this->db->insert('satuanbarang', $object);
	}

	public function getSatuan($id)
	{
		$this->db->where('kdSatuan', $id);
		$query = $this->db->get('satuanbarang',1);
		return $query->result();
	}

	public function updateSatuan($id)
	{
		$data = array('nama' => $this->input->post('nama'));
		$this->db->where('kdSatuan', $id);
		$this->db->update('satuanbarang', $data);
	}

	public function delSatuan($id)
	{
		$this->db->where('kdSatuan', $id);
		$this->db->delete('satuanbarang');
	}

}

/* End of file SatuanModel.php */
/* Location: ./application/models/SatuanModel.php */