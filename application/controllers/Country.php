<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_country_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'country/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'country/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'country/index.html';
            $config['first_url'] = base_url() . 'country/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_country_model->total_rows($q);
        $country = $this->Ms_country_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'country_data' => $country,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'country/ms_country_list',
            'judul' => 'List Country',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_country_model->get_by_id($id);
        if ($row) {
            $data = array(
		'country_code' => $row->country_code,
		'branch_code' => $row->branch_code,
		'continent_code' => $row->continent_code,
		'country_name' => $row->country_name,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('country/ms_country_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('country/create_action'),
	    'country_code' => set_value('country_code'),
	    'branch_code' => set_value('branch_code'),
	    'continent_code' => set_value('continent_code'),
	    'country_name' => set_value('country_name'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'country/ms_country_form',
            'judul' => 'List Country',
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
		'continent_code' => $this->input->post('continent_code',TRUE),
		'country_name' => $this->input->post('country_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_country_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('country'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_country_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('country/update_action'),
		'country_code' => set_value('country_code', $row->country_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'continent_code' => set_value('continent_code', $row->continent_code),
		'country_name' => set_value('country_name', $row->country_name),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'country/ms_country_form',
            'judul' => 'List Country',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('country_code', TRUE));
        } else {
            $data = array(
		'continent_code' => $this->input->post('continent_code',TRUE),
		'country_name' => $this->input->post('country_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_country_model->update($this->input->post('country_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('country'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_country_model->get_by_id($id);

        if ($row) {
            $this->Ms_country_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('country'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('continent_code', 'continent code', 'trim|required');
	$this->form_validation->set_rules('country_name', 'country name', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('country_code', 'country_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

