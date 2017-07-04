<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataKategori()
	{
		$this->db->select("kdKategori,nama");
		$query = $this->db->get('kategoribarang');
		return $query->result();
	}

	public function insertKategori()
	{
		$object = array('nama' => $this->input->post('nama'));
		$this->db->insert('kategoribarang', $object);
	}

	public function getKategori($id)
	{
		$this->db->where('kdKategori', $id);
		$query = $this->db->get('kategoribarang',1);
		return $query->result();
	}

	public function updateKategori($id)
	{
		$data = array('nama' => $this->input->post('nama'));
		$this->db->where('kdKategori', $id);
		$this->db->update('kategoribarang', $data);
	}

	public function delKategori($id)
	{
		$this->db->where('kdKategori', $id);
		$this->db->delete('kategoribarang');
	}
}

/* End of file KategoriModel.php */
/* Location: ./application/models/KategoriModel.php */