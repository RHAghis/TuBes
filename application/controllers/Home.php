<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//Do your magic here
	}
	
	public function index()
	{
		$this->load->view('Pegawai/Dashboard');	
	}

	public function viewSupplier()
	{
		$this->load->model('SupplierModel');
		$data["supplier_list"] = $this->SupplierModel->getDataSupplier();
		$this->load->view('Pegawai/ViewSupplier', $data);
	}

	public function datatable()
	{
		$data['supplier_list']=$this->SupplierModel->getDataSupplier();
		$this->load->view('Pegawai/ViewSupplier', $data);
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id-suplier,nama,almat,telp')->from('supplier');
		echo $this->datatables->generate();
	}

	public function viewAddSupplier()
	{
		$this->load->view('Pegawai/AddSupplier');
	}

	public function createSupplier()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('SupplierModel');
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/AddSupplier');
		}
		else
		{			
			$this->SupplierModel->insertSupplier();
			redirect('Home/viewSupplier','refresh');
		}
	}

	public function updateSupplier($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('SupplierModel');
		$data["supplier_list"] = $this->SupplierModel->getSupplier($id);
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Pegawai/EditSupplier',$data);
		}
		else
		{
			$this->SupplierModel->updateSupplier($id);
			redirect('Home/viewSupplier','refresh');
		}
	}

	public function deleteSupplier($id)
	{
		$this->load->model('SupplierModel');
		$data['supplier_list']=$this->SupplierModel->delSupplier($id);
		redirect('Home/viewSupplier','refresh');
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */