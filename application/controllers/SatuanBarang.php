<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SatuanBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function viewSatuan()
	{
		$this->load->model('SatuanModel');
		$data["satuan_list"] = $this->SatuanModel->getDataSatuan();
		$this->load->view('Pegawai/viewSatuan', $data);
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('kdSatuan,nama')->from('satuanbarang');
		echo $this->datatables->generate();
	}

	public function viewAddSatuan()
	{
		$this->load->view('Pegawai/AddSatuanBarang');
	}

	public function createSatuan()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('SatuanModel');
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/AddSatuanBarang');
		}
		else
		{			
			$this->SatuanModel->insertSatuan();
			redirect('SatuanBarang/viewSatuan','refresh');
		}
	}

	public function updateSatuan($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('SatuanModel');
		$data["satuan_list"] = $this->SatuanModel->getSatuan($id);
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/EditSatuanBarang',$data);
		}
		else
		{
			$this->SatuanModel->updateSatuan($id);
			redirect('SatuanBarang/viewSatuan','refresh');
		}
	}

	public function deleteSatuan($id)
	{
		$this->load->model('SatuanModel');
		$data['satuan_list']=$this->SatuanModel->delSatuan($id);
		redirect('SatuanBarang/viewSatuan','refresh');
	}

}

/* End of file SatuanBarang.php */
/* Location: ./application/controllers/SatuanBarang.php */