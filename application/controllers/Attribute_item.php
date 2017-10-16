<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Attribute_item extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ms_attribute_item_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'attribute_item/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'attribute_item/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'attribute_item/index.html';
            $config['first_url'] = base_url() . 'attribute_item/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ms_attribute_item_model->total_rows($q);
        $attribute_item = $this->Ms_attribute_item_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'attribute_item_data' => $attribute_item,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'attribute_item/ms_attribute_item_list',
            'judul' => 'Attribute item',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Ms_attribute_item_model->get_by_id($id);
        if ($row) {
            $data = array(
		'attribute_code' => $row->attribute_code,
		'branch_code' => $row->branch_code,
		'attribute_id' => $row->attribute_id,
		'attribute_level' => $row->attribute_level,
		'attribute_name' => $row->attribute_name,
		'seq_number' => $row->seq_number,
		'input_datetime' => $row->input_datetime,
		'input_username' => $row->input_username,
		'active' => $row->active,
	    );
            $this->load->view('attribute_item/ms_attribute_item_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('attribute_item'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('attribute_item/create_action'),
	    'attribute_code' => set_value('attribute_code'),
	    'branch_code' => set_value('branch_code'),
	    'attribute_id' => set_value('attribute_id'),
	    'attribute_level' => set_value('attribute_level'),
	    'attribute_name' => set_value('attribute_name'),
	    'seq_number' => set_value('seq_number'),
	    'input_datetime' => set_value('input_datetime'),
	    'input_username' => set_value('input_username'),
	    'active' => set_value('active'),
        'konten' => 'attribute_item/ms_attribute_item_form',
            'judul' => 'Attribute item',
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
		'attribute_id' => $this->input->post('attribute_id',TRUE),
		'attribute_level' => $this->input->post('attribute_level',TRUE),
		'attribute_name' => $this->input->post('attribute_name',TRUE),
		'seq_number' => $this->input->post('seq_number',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_attribute_item_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('attribute_item'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ms_attribute_item_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('attribute_item/update_action'),
		'attribute_code' => set_value('attribute_code', $row->attribute_code),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'attribute_id' => set_value('attribute_id', $row->attribute_id),
		'attribute_level' => set_value('attribute_level', $row->attribute_level),
		'attribute_name' => set_value('attribute_name', $row->attribute_name),
		'seq_number' => set_value('seq_number', $row->seq_number),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'input_username' => set_value('input_username', $row->input_username),
		'active' => set_value('active', $row->active),
        'konten' => 'attribute_item/ms_attribute_item_form',
            'judul' => 'Attribute item',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('attribute_item'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('attribute_code', TRUE));
        } else {
            $data = array(
		'attribute_id' => $this->input->post('attribute_id',TRUE),
		'attribute_level' => $this->input->post('attribute_level',TRUE),
		'attribute_name' => $this->input->post('attribute_name',TRUE),
		'seq_number' => $this->input->post('seq_number',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'input_username' => $this->input->post('input_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Ms_attribute_item_model->update($this->input->post('attribute_code', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('attribute_item'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ms_attribute_item_model->get_by_id($id);

        if ($row) {
            $this->Ms_attribute_item_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('attribute_item'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('attribute_item'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('attribute_id', 'attribute id', 'trim|required');
	$this->form_validation->set_rules('attribute_level', 'attribute level', 'trim|required');
	$this->form_validation->set_rules('attribute_name', 'attribute name', 'trim|required');
	$this->form_validation->set_rules('seq_number', 'seq number', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('input_username', 'input username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('attribute_code', 'attribute_code', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

