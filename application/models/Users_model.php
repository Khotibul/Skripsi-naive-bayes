<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public $table = 'users';
    public $id = 'id';
    public $order = 'ASC';

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

    function get_by_group($id)
    {
        
        $this->db->join('users_groups', 'users.id = users_groups.user_id', 'left');
        $this->db->join('groups', 'users_groups.group_id = groups.id', 'left');
        $this->db->where('users_groups.group_id', $id);
        $this->db->order_by('users.id', $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_group($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->get('users_groups')->row();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->join('users_groups', 'users.id = users_groups.user_id', 'left');
        $this->db->join('groups', 'users_groups.group_id = groups.id', 'left');
        $this->db->where('users.id', $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('password', $q);
        $this->db->or_like('phone', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('user_img', $q);
        $this->db->or_like('ip_address', $q);
        $this->db->or_like('last_login', $q);
        $this->db->or_like('salt', $q);
        $this->db->or_like('activation_code', $q);
        $this->db->or_like('forgotten_password_code', $q);
        $this->db->or_like('forgotten_password_time', $q);
        $this->db->or_like('remember_code', $q);
        $this->db->or_like('active', $q);
        $this->db->or_like('created_on', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('password', $q);
        $this->db->or_like('phone', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('user_img', $q);
        $this->db->or_like('ip_address', $q);
        $this->db->or_like('last_login', $q);
        $this->db->or_like('salt', $q);
        $this->db->or_like('activation_code', $q);
        $this->db->or_like('forgotten_password_code', $q);
        $this->db->or_like('forgotten_password_time', $q);
        $this->db->or_like('remember_code', $q);
        $this->db->or_like('active', $q);
        $this->db->or_like('created_on', $q);
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

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */
/* Please DO NOT modify this information : */
/* This file generated by Andre Bhaskoro (+62 82 333 817 317) At : 2016-09-28 04:20:36 */
/* http://bhas.web.id */