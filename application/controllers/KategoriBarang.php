<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function viewKategori()
	{
		$this->load->model('KategoriModel');
		$data["kategori_list"] = $this->KategoriModel->getDataKategori();
		$this->load->view('Pegawai/viewKategori', $data);
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('kdKategori,nama')->from('kategoribarang');
		echo $this->datatables->generate();
	}

	public function viewAddKategori()
	{
		$this->load->view('Pegawai/AddKategoriBarang');
	}

	public function createKategori()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('KategoriModel');
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/AddKategoriBarang');
		}
		else
		{			
			$this->KategoriModel->insertKategori();
			redirect('KategoriBarang/viewKategori','refresh');
		}
	}

	public function updateKategori($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('KategoriModel');
		$data["kategori_list"] = $this->KategoriModel->getKategori($id);
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/EditKategoriBarang',$data);
		}
		else
		{
			$this->KategoriModel->updateKategori($id);
			redirect('KategoriBarang/viewKategori','refresh');
		}
	}

	public function deleteKategori($id)
	{
		$this->load->model('KategoriModel');
		$data['kategori_list']=$this->KategoriModel->delKategori($id);
		redirect('KategoriBarang/viewKategori','refresh');
		
	}

}

/* End of file KategoriBarang.php */
/* Location: ./application/controllers/KategoriBarang.php */