<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Region extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_region_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'region/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'region/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'region/index.html';
            $config['first_url'] = base_url() . 'region/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_region_model->total_rows($q);
        $region = $this->Ms_region_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'region_data' => $region,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'region/ms_region_list',
            'judul' => 'List Region',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_region_model->get_by_id($id);
        if ($row) {
            $data = array(
		'region_code' => $row->region_code,
		'branch_code' => $row->branch_code,
		'region_id' => $row->region_id,
		'region_name' => $row->region_name,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('region/ms_region_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('region'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('region/create_action'),
	    'region_code' => set_value('region_code'),
	    'branch_code' => set_value('branch_code'),
	    'region_id' => set_value('region_id'),
	    'region_name' => set_value('region_name'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'region/ms_region_form',
            'judul' => 'List Region',
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
		'region_id' => $this->input->post('region_id',TRUE),
		'region_name' => $this->input->post('region_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_region_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('region'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_region_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('region/update_action'),
		'region_code' => set_value('region_code', $row->region_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'region_id' => set_value('region_id', $row->region_id),
		'region_name' => set_value('region_name', $row->region_name),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'region/ms_region_form',
            'judul' => 'List Region',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('region'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('region_code', TRUE));
        } else {
            $data = array(
		'region_id' => $this->input->post('region_id',TRUE),
		'region_name' => $this->input->post('region_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_region_model->update($this->input->post('region_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('region'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_region_model->get_by_id($id);

        if ($row) {
            $this->Ms_region_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('region'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('region'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('region_id', 'region id', 'trim|required');
	$this->form_validation->set_rules('region_name', 'region name', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('region_code', 'region_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
