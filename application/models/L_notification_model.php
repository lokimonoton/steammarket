<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class L_notification_model extends CI_Model
{

    public $table = 'l_notification';
    public $id = 'notification_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_all_input()
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('notif_status', 'input');
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('notification_id', $q);
	$this->db->or_like('branch_code', $q);
	$this->db->or_like('notif_type', $q);
	$this->db->or_like('division_name', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('group_user', $q);
	$this->db->or_like('notification', $q);
	$this->db->or_like('module', $q);
	$this->db->or_like('table_name', $q);
	$this->db->or_like('field_name', $q);
	$this->db->or_like('field_value', $q);
	$this->db->or_like('require_field', $q);
	$this->db->or_like('link_page', $q);
	$this->db->or_like('notif_status', $q);
	$this->db->or_like('input_datetime', $q);
	$this->db->or_like('respond_datetime', $q);
	$this->db->or_like('respond_username', $q);
	$this->db->or_like('active', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get total rows
    function total_rows_input($q = NULL) {
        $this->db->like('notification_id', $q);
        $this->db->where('notif_status', 'input');
    $this->db->or_like('branch_code', $q);
    $this->db->or_like('notif_type', $q);
    $this->db->or_like('division_name', $q);
    $this->db->or_like('username', $q);
    $this->db->or_like('group_user', $q);
    $this->db->or_like('notification', $q);
    $this->db->or_like('module', $q);
    $this->db->or_like('table_name', $q);
    $this->db->or_like('field_name', $q);
    $this->db->or_like('field_value', $q);
    $this->db->or_like('require_field', $q);
    $this->db->or_like('link_page', $q);
    $this->db->or_like('notif_status', $q);
    $this->db->or_like('input_datetime', $q);
    $this->db->or_like('respond_datetime', $q);
    $this->db->or_like('respond_username', $q);
    $this->db->or_like('active', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('notification_id', $q);
	$this->db->or_like('branch_code', $q);
	$this->db->or_like('notif_type', $q);
	$this->db->or_like('division_name', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('group_user', $q);
	$this->db->or_like('notification', $q);
	$this->db->or_like('module', $q);
	$this->db->or_like('table_name', $q);
	$this->db->or_like('field_name', $q);
	$this->db->or_like('field_value', $q);
	$this->db->or_like('require_field', $q);
	$this->db->or_like('link_page', $q);
	$this->db->or_like('notif_status', $q);
	$this->db->or_like('input_datetime', $q);
	$this->db->or_like('respond_datetime', $q);
	$this->db->or_like('respond_username', $q);
	$this->db->or_like('active', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // get data with limit and search
    function get_limit_data_input($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('notif_status', 'input');
        $this->db->like('notification_id', $q);
    $this->db->or_like('branch_code', $q);
    $this->db->or_like('notif_type', $q);
    $this->db->or_like('division_name', $q);
    $this->db->or_like('username', $q);
    $this->db->or_like('group_user', $q);
    $this->db->or_like('notification', $q);
    $this->db->or_like('module', $q);
    $this->db->or_like('table_name', $q);
    $this->db->or_like('field_name', $q);
    $this->db->or_like('field_value', $q);
    $this->db->or_like('require_field', $q);
    $this->db->or_like('link_page', $q);
    $this->db->or_like('notif_status', $q);
    $this->db->or_like('input_datetime', $q);
    $this->db->or_like('respond_datetime', $q);
    $this->db->or_like('respond_username', $q);
    $this->db->or_like('active', $q);
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file L_notification_model.php */
/* Location: ./application/models/L_notification_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-09 08:25:48 */
/* http://harviacode.com */