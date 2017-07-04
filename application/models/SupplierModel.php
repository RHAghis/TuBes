<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataSupplier()
	{
		$this->db->select("idSupplier,nama,alamat,telp");
		$query = $this->db->get('supplier');
		return $query->result();
	}

	public function insertSupplier()
	{
		$object = array('nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telp' => $this->input->post('telp'));
		$this->db->insert('supplier', $object);
	}

	public function getSupplier($id)
	{
		$this->db->where('idSupplier', $id);
		$query = $this->db->get('supplier',1);
		return $query->result();
	}

	public function updateSupplier($id)
	{
		$data = array('nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telp' => $this->input->post('telp'));
		$this->db->where('idSupplier', $id);
		$this->db->update('supplier', $data);
	}

	public function delSupplier($id)
	{
		$this->db->where('idSupplier', $id);
		$this->db->delete('supplier');
	}

}

/* End of file SupplierModel.php */
/* Location: ./application/models/SupplierModel.php */