<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Area extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_area_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'area/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'area/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'area/index.html';
            $config['first_url'] = base_url() . 'area/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_area_model->total_rows($q);
        $area = $this->Ms_area_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'area_data' => $area,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'area/ms_area_list',
            'judul' => 'Area',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_area_model->get_by_id($id);
        if ($row) {
            $data = array(
		'area_code' => $row->area_code,
		'branch_code' => $row->branch_code,
		'area_name' => $row->area_name,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,

	    );
            $this->load->view('area/ms_area_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('area'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('area/create_action'),
	    'area_code' => set_value('area_code'),
	    'branch_code' => set_value('branch_code'),
	    'area_name' => set_value('area_name'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'area/ms_area_form',
            'judul' => 'Area',
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
		'area_name' => $this->input->post('area_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_area_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('area'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_area_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('area/update_action'),
		'area_code' => set_value('area_code', $row->area_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'area_name' => set_value('area_name', $row->area_name),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'area/ms_area_form',
            'judul' => 'Area',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('area'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('area_code', TRUE));
        } else {
            $data = array(
		'area_name' => $this->input->post('area_name',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_area_model->update($this->input->post('area_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('area'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_area_model->get_by_id($id);

        if ($row) {
            $this->Ms_area_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('area'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('area'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('area_name', 'area name', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('area_code', 'area_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

