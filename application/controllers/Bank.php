<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bank extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_bank_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'bank/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bank/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bank/index.html';
            $config['first_url'] = base_url() . 'bank/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_bank_model->total_rows($q);
        $bank = $this->Ms_bank_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bank_data' => $bank,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'bank/ms_bank_list',
            'judul' => 'List Bank',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_bank_model->get_by_id($id);
        if ($row) {
            $data = array(
		'bank_code' => $row->bank_code,
		'branch_code' => $row->branch_code,
		'bank_name' => $row->bank_name,
		'picture' => $row->picture,
		'seq_number' => $row->seq_number,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('bank/ms_bank_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bank'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('bank/create_action'),
	    'bank_code' => set_value('bank_code'),
	    'branch_code' => set_value('branch_code'),
	    'bank_name' => set_value('bank_name'),
	    'picture' => set_value('picture'),
	    'seq_number' => set_value('seq_number'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'bank/ms_bank_form',
            'judul' => 'List Bank',
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
		'bank_name' => $this->input->post('bank_name',TRUE),
		'picture' => $this->input->post('picture',TRUE),
		'seq_number' => $this->input->post('seq_number',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_bank_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('bank'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_bank_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('bank/update_action'),
		'bank_code' => set_value('bank_code', $row->bank_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'bank_name' => set_value('bank_name', $row->bank_name),
		'picture' => set_value('picture', $row->picture),
		'seq_number' => set_value('seq_number', $row->seq_number),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'bank/ms_bank_form',
            'judul' => 'List Bank',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bank'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('bank_code', TRUE));
        } else {
            $data = array(
		'bank_name' => $this->input->post('bank_name',TRUE),
		'picture' => $this->input->post('picture',TRUE),
		'seq_number' => $this->input->post('seq_number',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_bank_model->update($this->input->post('bank_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('bank'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_bank_model->get_by_id($id);

        if ($row) {
            $this->Ms_bank_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('bank'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bank'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('bank_name', 'bank name', 'trim|required');
	$this->form_validation->set_rules('picture', 'picture', 'trim|required');
	$this->form_validation->set_rules('seq_number', 'seq number', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('bank_code', 'bank_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

