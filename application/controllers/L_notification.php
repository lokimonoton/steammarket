<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class L_notification extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('L_notification_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'l_notification/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'l_notification/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'l_notification/index.html';
            $config['first_url'] = base_url() . 'l_notification/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->L_notification_model->total_rows_input($q);
        $l_notification = $this->L_notification_model->get_limit_data_input($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'l_notification_data' => $l_notification,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'l_notification/l_notification_list',
            'judul' => 'notification list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->L_notification_model->get_by_id($id);
        if ($row) {
            $data = array(
		'notification_id' => $row->notification_id,
		'branch_code' => $row->branch_code,
		'notif_type' => $row->notif_type,
		'division_name' => $row->division_name,
		'username' => $row->username,
		'group_user' => $row->group_user,
		'notification' => $row->notification,
		'module' => $row->module,
		'table_name' => $row->table_name,
		'field_name' => $row->field_name,
		'field_value' => $row->field_value,
		'require_field' => $row->require_field,
		'link_page' => $row->link_page,
		'notif_status' => $row->notif_status,
		'input_datetime' => $row->input_datetime,
		'respond_datetime' => $row->respond_datetime,
		'respond_username' => $row->respond_username,
		'active' => $row->active,
	    );
            $this->load->view('l_notification/l_notification_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('l_notification'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('l_notification/create_action'),
	    'notification_id' => set_value('notification_id'),
	    'branch_code' => set_value('branch_code'),
	    'notif_type' => set_value('notif_type'),
	    'division_name' => set_value('division_name'),
	    'username' => set_value('username'),
	    'group_user' => set_value('group_user'),
	    'notification' => set_value('notification'),
	    'module' => set_value('module'),
	    'table_name' => set_value('table_name'),
	    'field_name' => set_value('field_name'),
	    'field_value' => set_value('field_value'),
	    'require_field' => set_value('require_field'),
	    'link_page' => set_value('link_page'),
	    'notif_status' => set_value('notif_status'),
	    'input_datetime' => set_value('input_datetime'),
	    'respond_datetime' => set_value('respond_datetime'),
	    'respond_username' => set_value('respond_username'),
	    'active' => set_value('active'),
	    'konten' => 'l_notification/l_notification_form',
            'judul' => 'notification list',
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
		'branch_code' => $this->input->post('branch_code',TRUE),
		'notif_type' => $this->input->post('notif_type',TRUE),
		'division_name' => $this->input->post('division_name',TRUE),
		'username' => $this->input->post('username',TRUE),
		'group_user' => $this->input->post('group_user',TRUE),
		'notification' => $this->input->post('notification',TRUE),
		'module' => $this->input->post('module',TRUE),
		'table_name' => $this->input->post('table_name',TRUE),
		'field_name' => $this->input->post('field_name',TRUE),
		'field_value' => $this->input->post('field_value',TRUE),
		'require_field' => $this->input->post('require_field',TRUE),
		'link_page' => $this->input->post('link_page',TRUE),
		'notif_status' => $this->input->post('notif_status',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'respond_datetime' => $this->input->post('respond_datetime',TRUE),
		'respond_username' => $this->input->post('respond_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->L_notification_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('l_notification'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->L_notification_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('l_notification/update_action'),
		'notification_id' => set_value('notification_id', $row->notification_id),
		'branch_code' => set_value('branch_code', $row->branch_code),
		'notif_type' => set_value('notif_type', $row->notif_type),
		'division_name' => set_value('division_name', $row->division_name),
		'username' => set_value('username', $row->username),
		'group_user' => set_value('group_user', $row->group_user),
		'notification' => set_value('notification', $row->notification),
		'module' => set_value('module', $row->module),
		'table_name' => set_value('table_name', $row->table_name),
		'field_name' => set_value('field_name', $row->field_name),
		'field_value' => set_value('field_value', $row->field_value),
		'require_field' => set_value('require_field', $row->require_field),
		'link_page' => set_value('link_page', $row->link_page),
		'notif_status' => set_value('notif_status', $row->notif_status),
		'input_datetime' => set_value('input_datetime', $row->input_datetime),
		'respond_datetime' => set_value('respond_datetime', $row->respond_datetime),
		'respond_username' => set_value('respond_username', $row->respond_username),
		'active' => set_value('active', $row->active),
		'konten' => 'l_notification/l_notification_form',
            'judul' => 'notification list',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('l_notification'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('notification_id', TRUE));
        } else {
            $data = array(
		'branch_code' => $this->input->post('branch_code',TRUE),
		'notif_type' => $this->input->post('notif_type',TRUE),
		'division_name' => $this->input->post('division_name',TRUE),
		'username' => $this->input->post('username',TRUE),
		'group_user' => $this->input->post('group_user',TRUE),
		'notification' => $this->input->post('notification',TRUE),
		'module' => $this->input->post('module',TRUE),
		'table_name' => $this->input->post('table_name',TRUE),
		'field_name' => $this->input->post('field_name',TRUE),
		'field_value' => $this->input->post('field_value',TRUE),
		'require_field' => $this->input->post('require_field',TRUE),
		'link_page' => $this->input->post('link_page',TRUE),
		'notif_status' => $this->input->post('notif_status',TRUE),
		'input_datetime' => $this->input->post('input_datetime',TRUE),
		'respond_datetime' => $this->input->post('respond_datetime',TRUE),
		'respond_username' => $this->input->post('respond_username',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->L_notification_model->update($this->input->post('notification_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('l_notification'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->L_notification_model->get_by_id($id);

        if ($row) {
            $this->L_notification_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('l_notification'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('l_notification'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('branch_code', 'branch code', 'trim|required');
	$this->form_validation->set_rules('notif_type', 'notif type', 'trim|required');
	$this->form_validation->set_rules('division_name', 'division name', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('group_user', 'group user', 'trim|required');
	$this->form_validation->set_rules('notification', 'notification', 'trim|required');
	$this->form_validation->set_rules('module', 'module', 'trim|required');
	$this->form_validation->set_rules('table_name', 'table name', 'trim|required');
	$this->form_validation->set_rules('field_name', 'field name', 'trim|required');
	$this->form_validation->set_rules('field_value', 'field value', 'trim|required');
	$this->form_validation->set_rules('require_field', 'require field', 'trim|required');
	$this->form_validation->set_rules('link_page', 'link page', 'trim|required');
	$this->form_validation->set_rules('notif_status', 'notif status', 'trim|required');
	$this->form_validation->set_rules('input_datetime', 'input datetime', 'trim|required');
	$this->form_validation->set_rules('respond_datetime', 'respond datetime', 'trim|required');
	$this->form_validation->set_rules('respond_username', 'respond username', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('notification_id', 'notification_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

