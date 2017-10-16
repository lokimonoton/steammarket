<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class City extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_city_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'city/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'city/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'city/index.html';
            $config['first_url'] = base_url() . 'city/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_city_model->total_rows($q);
        $city = $this->Ms_city_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'city_data' => $city,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'city/ms_city_list',
            'judul' => 'List City',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_city_model->get_by_id($id);
        if ($row) {
            $data = array(
		'city_code' => $row->city_code,
		'branch_code' => $row->branch_code,
		'store_count' => $row->store_count,
		'city_id' => $row->city_id,
		'region_code' => $row->region_code,
		'state_code' => $row->state_code,
		'city_name' => $row->city_name,
		'total_institution' => $row->total_institution,
		'total_customer' => $row->total_customer,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('city/ms_city_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('city'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('city/create_action'),
	    'city_code' => set_value('city_code'),
	    'branch_code' => set_value('branch_code'),
	    'store_count' => set_value('store_count'),
	    'city_id' => set_value('city_id'),
	    'region_code' => set_value('region_code'),
	    'state_code' => set_value('state_code'),
	    'city_name' => set_value('city_name'),
	    'total_institution' => set_value('total_institution'),
	    'total_customer' => set_value('total_customer'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'city/ms_city_form',
            'judul' => 'List City',
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
		'store_count' => $this->input->post('store_count',TRUE),
		'city_id' => $this->input->post('city_id',TRUE),
		'region_code' => $this->input->post('region_code',TRUE),
		'state_code' => $this->input->post('state_code',TRUE),
		'city_name' => $this->input->post('city_name',TRUE),
		'total_institution' => $this->input->post('total_institution',TRUE),
		'total_customer' => $this->input->post('total_customer',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_city_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('city'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_city_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('city/update_action'),
		'city_code' => set_value('city_code', $row->city_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'store_count' => set_value('store_count', $row->store_count),
		'city_id' => set_value('city_id', $row->city_id),
		'region_code' => set_value('region_code', $row->region_code),
		'state_code' => set_value('state_code', $row->state_code),
		'city_name' => set_value('city_name', $row->city_name),
		'total_institution' => set_value('total_institution', $row->total_institution),
		'total_customer' => set_value('total_customer', $row->total_customer),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'city/ms_city_form',
            'judul' => 'List City',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('city'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('city_code', TRUE));
        } else {
            $data = array(
		'store_count' => $this->input->post('store_count',TRUE),
		'city_id' => $this->input->post('city_id',TRUE),
		'region_code' => $this->input->post('region_code',TRUE),
		'state_code' => $this->input->post('state_code',TRUE),
		'city_name' => $this->input->post('city_name',TRUE),
		'total_institution' => $this->input->post('total_institution',TRUE),
		'total_customer' => $this->input->post('total_customer',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_city_model->update($this->input->post('city_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('city'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_city_model->get_by_id($id);

        if ($row) {
            $this->Ms_city_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('city'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('city'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('store_count', 'store count', 'trim|required');
	$this->form_validation->set_rules('city_id', 'city id', 'trim|required');
	$this->form_validation->set_rules('region_code', 'region code', 'trim|required');
	$this->form_validation->set_rules('state_code', 'state code', 'trim|required');
	$this->form_validation->set_rules('city_name', 'city name', 'trim|required');
	$this->form_validation->set_rules('total_institution', 'total institution', 'trim|required');
	$this->form_validation->set_rules('total_customer', 'total customer', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('city_code', 'city_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

