<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('BarangModel');
		$data['satuan_list'] = $this->BarangModel->getDataSatuan();
		$this->load->view('Pegawai/AddBarang', $data);
	}

	public function viewBarang()
	{
		$this->load->model('BarangModel');
		$data["barang_list"] = $this->BarangModel->getDataBarang();
		$this->load->view('Pegawai/viewBarang', $data);
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('kdSatuan,nama')->from('satuanbarang');
		echo $this->datatables->generate();
	}

	public function viewAddBarang()
	{
		$this->load->view('Pegawai/AddBarang');
	}

	public function viewComboSatuan()
	{
		$this->load->model('BarangModel');
		$data['satuan_list'] = $this->BarangModel->getDataSatuan();
		$this->load->view('Pegawai/AddBarang', $data);
	}

	public function createBarang()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('BarangModel');
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/AddBarang');
		}
		else
		{			
			$this->BarangModel->insertBarang();
			redirect('Barang/viewBarang','refresh');
		}
	}

	public function updateSatuan($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('BarangModel');
		$data["barang_list"] = $this->BarangModel->getSatuan($id);
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/EditSatuanBarang',$data);
		}
		else
		{
			$this->BarangModel->updateSatuan($id);
			redirect('SatuanBarang/viewBarang','refresh');
		}
	}

	public function deleteSatuan($id)
	{
		$this->load->model('BarangModel');
		$data['barang_list']=$this->BarangModel->delSatuan($id);
		redirect('SatuanBarang/viewBarang','refresh');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */