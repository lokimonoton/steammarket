<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
 function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_sales_model');
        $this->load->library('form_validation');
    }

	
	public function index()
	{
		
		$data = array(
			'konten' => 'sales/purchaseorder',
            'judul' => 'Purchase Order (PO)',
		);
		$this->load->view('v_index', $data);
	}
	public function purchaseorder()
	{
		$data = array(
			'konten' => 'purchasing/purchaseorder',
            'judul' => 'Purchase Order (PO)',
		);
		$this->load->view('v_index', $data);
	}
	public function addpurchaseorder()
	{
		$data = array(
			'konten' => 'purchasing/addpurchaseorder',
            'judul' => 'Tambah Purchase Order (PO)',
		);
		$this->load->view('v_index', $data);
	}
	public function insertPurchaseOrder()
	{
// 		$this->Ms_sales_model->insert($data);
// print_r($this->Ms_sales_model->get_all());
	// echo "panda";
		// $this->load->view('v_index', $data);
	}
	public function customerList(){
		$data = array(
			'konten' => 'sales/customerlist',
            'judul' => 'Customer List',
		);
		$this->load->view('v_index', $data);
	}
	public function addCustomerList(){
		$data = array(
			'konten' => 'sales/addcustomerlist',
            'judul' => 'Tambah Customer List',
		);
		$this->load->view('v_index', $data);
	}


}
