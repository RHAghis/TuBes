<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataSatuan()
	{
		$this->db->order_by('nama','ASC');
		$satuan= $this->db->get('satuanbarang');
		return $satuan->result_array();
	}

	public function getDataBarang()
	{
		$query = $this->db->query('SELECT b.idBarang,b.nama,b.stok, sb.nama AS satuan, kb.nama AS kategori, hargaSatuan, hargaBeli, hargaJual, Laba, s.nama as supplier FROM barang b JOIN satuanbarang sb ON b.kdSatuan=sb.kdSatuan join kategoribarang kb on b.kdKategori = kb.kdKategori join supplier s ON b.idSupplier = s.idSupplier');
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

/* End of file BarangModel.php */
/* Location: ./application/models/BarangModel.php */