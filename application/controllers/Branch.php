<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Branch extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_branch_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'branch/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'branch/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'branch/index.html';
            $config['first_url'] = base_url() . 'branch/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_branch_model->total_rows($q);
        $branch = $this->Ms_branch_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'branch_data' => $branch,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'branch/ms_branch_list',
            'judul' => 'List Branch',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_branch_model->get_by_id($id);
        if ($row) {
            $data = array(
		'branch_code' => $row->branch_code,
		'branch_id' => $row->branch_id,
		'head_office_code' => $row->head_office_code,
		'default_warehouse' => $row->default_warehouse,
		'region_code' => $row->region_code,
		'city_code' => $row->city_code,
		'branch_name' => $row->branch_name,
		'branch_address' => $row->branch_address,
		'branch_phone' => $row->branch_phone,
		'branch_contact_person' => $row->branch_contact_person,
		'default_currency' => $row->default_currency,
		'tax_branch_name' => $row->tax_branch_name,
		'tax_branch_address' => $row->tax_branch_address,
		'tax_form_serial_number' => $row->tax_form_serial_number,
		'npwp' => $row->npwp,
		'taxable_company_no' => $row->taxable_company_no,
		'taxable_company_date' => $row->taxable_company_date,
		'labor_type' => $row->labor_type,
		'klu_spt' => $row->klu_spt,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('branch/ms_branch_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('branch'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('branch/create_action'),
	    'branch_code' => set_value('branch_code'),
	    'branch_id' => set_value('branch_id'),
	    'head_office_code' => set_value('head_office_code'),
	    'default_warehouse' => set_value('default_warehouse'),
	    'region_code' => set_value('region_code'),
	    'city_code' => set_value('city_code'),
	    'branch_name' => set_value('branch_name'),
	    'branch_address' => set_value('branch_address'),
	    'branch_phone' => set_value('branch_phone'),
	    'branch_contact_person' => set_value('branch_contact_person'),
	    'default_currency' => set_value('default_currency'),
	    'tax_branch_name' => set_value('tax_branch_name'),
	    'tax_branch_address' => set_value('tax_branch_address'),
	    'tax_form_serial_number' => set_value('tax_form_serial_number'),
	    'npwp' => set_value('npwp'),
	    'taxable_company_no' => set_value('taxable_company_no'),
	    'taxable_company_date' => set_value('taxable_company_date'),
	    'labor_type' => set_value('labor_type'),
	    'klu_spt' => set_value('klu_spt'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
	    'konten' => 'branch/ms_branch_form',
            'judul' => 'List Branch',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'branch_id' => $this->input->post('branch_id',TRUE),
		'head_office_code' => $this->input->post('head_office_code',TRUE),
		'default_warehouse' => $this->input->post('default_warehouse',TRUE),
		'region_code' => $this->input->post('region_code',TRUE),
		'city_code' => $this->input->post('city_code',TRUE),
		'branch_name' => $this->input->post('branch_name',TRUE),
		'branch_address' => $this->input->post('branch_address',TRUE),
		'branch_phone' => $this->input->post('branch_phone',TRUE),
		'branch_contact_person' => $this->input->post('branch_contact_person',TRUE),
		'default_currency' => $this->input->post('default_currency',TRUE),
		'tax_branch_name' => $this->input->post('tax_branch_name',TRUE),
		'tax_branch_address' => $this->input->post('tax_branch_address',TRUE),
		'tax_form_serial_number' => $this->input->post('tax_form_serial_number',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'taxable_company_no' => $this->input->post('taxable_company_no',TRUE),
		'taxable_company_date' => $this->input->post('taxable_company_date',TRUE),
		'labor_type' => $this->input->post('labor_type',TRUE),
		'klu_spt' => $this->input->post('klu_spt',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_branch_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('branch'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_branch_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('branch/update_action'),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'branch_id' => set_value('branch_id', $row->branch_id),
		'head_office_code' => set_value('head_office_code', $row->head_office_code),
		'default_warehouse' => set_value('default_warehouse', $row->default_warehouse),
		'region_code' => set_value('region_code', $row->region_code),
		'city_code' => set_value('city_code', $row->city_code),
		'branch_name' => set_value('branch_name', $row->branch_name),
		'branch_address' => set_value('branch_address', $row->branch_address),
		'branch_phone' => set_value('branch_phone', $row->branch_phone),
		'branch_contact_person' => set_value('branch_contact_person', $row->branch_contact_person),
		'default_currency' => set_value('default_currency', $row->default_currency),
		'tax_branch_name' => set_value('tax_branch_name', $row->tax_branch_name),
		'tax_branch_address' => set_value('tax_branch_address', $row->tax_branch_address),
		'tax_form_serial_number' => set_value('tax_form_serial_number', $row->tax_form_serial_number),
		'npwp' => set_value('npwp', $row->npwp),
		'taxable_company_no' => set_value('taxable_company_no', $row->taxable_company_no),
		'taxable_company_date' => set_value('taxable_company_date', $row->taxable_company_date),
		'labor_type' => set_value('labor_type', $row->labor_type),
		'klu_spt' => set_value('klu_spt', $row->klu_spt),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
		'konten' => 'branch/ms_branch_form',
            'judul' => 'List Branch',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('branch'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('branch_code', TRUE));
        } else {
            $data = array(
		'branch_id' => $this->input->post('branch_id',TRUE),
		'head_office_code' => $this->input->post('head_office_code',TRUE),
		'default_warehouse' => $this->input->post('default_warehouse',TRUE),
		'region_code' => $this->input->post('region_code',TRUE),
		'city_code' => $this->input->post('city_code',TRUE),
		'branch_name' => $this->input->post('branch_name',TRUE),
		'branch_address' => $this->input->post('branch_address',TRUE),
		'branch_phone' => $this->input->post('branch_phone',TRUE),
		'branch_contact_person' => $this->input->post('branch_contact_person',TRUE),
		'default_currency' => $this->input->post('default_currency',TRUE),
		'tax_branch_name' => $this->input->post('tax_branch_name',TRUE),
		'tax_branch_address' => $this->input->post('tax_branch_address',TRUE),
		'tax_form_serial_number' => $this->input->post('tax_form_serial_number',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'taxable_company_no' => $this->input->post('taxable_company_no',TRUE),
		'taxable_company_date' => $this->input->post('taxable_company_date',TRUE),
		'labor_type' => $this->input->post('labor_type',TRUE),
		'klu_spt' => $this->input->post('klu_spt',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_branch_model->update($this->input->post('branch_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('branch'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_branch_model->get_by_id($id);

        if ($row) {
            $this->Ms_branch_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('branch'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('branch'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('branch_id', 'branch id', 'trim|required');
	$this->form_validation->set_rules('head_office_code', 'head office code', 'trim|required');
	$this->form_validation->set_rules('default_warehouse', 'default warehouse', 'trim|required');
	$this->form_validation->set_rules('region_code', 'region code', 'trim|required');
	$this->form_validation->set_rules('city_code', 'city code', 'trim|required');
	$this->form_validation->set_rules('branch_name', 'branch name', 'trim|required');
	$this->form_validation->set_rules('branch_address', 'branch address', 'trim|required');
	$this->form_validation->set_rules('branch_phone', 'branch phone', 'trim|required');
	$this->form_validation->set_rules('branch_contact_person', 'branch contact person', 'trim|required');
	$this->form_validation->set_rules('default_currency', 'default currency', 'trim|required');
	$this->form_validation->set_rules('tax_branch_name', 'tax branch name', 'trim|required');
	$this->form_validation->set_rules('tax_branch_address', 'tax branch address', 'trim|required');
	$this->form_validation->set_rules('tax_form_serial_number', 'tax form serial number', 'trim|required');
	$this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
	$this->form_validation->set_rules('taxable_company_no', 'taxable company no', 'trim|required');
	$this->form_validation->set_rules('taxable_company_date', 'taxable company date', 'trim|required');
	$this->form_validation->set_rules('labor_type', 'labor type', 'trim|required');
	$this->form_validation->set_rules('klu_spt', 'klu spt', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('branch_code', 'branch_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
