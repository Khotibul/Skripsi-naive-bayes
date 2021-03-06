x<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Desa_model extends CI_Model
{

    public $table = 'data_santri';
    public $id = 'id_santri';
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

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_santri', $q);
	$this->db->or_like('nama_santri', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_santri', $q);
	$this->db->or_like('nama_santri', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return;
    }

    function get_wali_by_id($id)
    {
        $this->db->where('id_santri_detail', $id);
        return $this->db->get('detail_santri')->row();
    }

    function get_wali_by_id_santri($id_santri)
    {
        $this->db->where('id', $id_santri);
        return $this->db->get('detail_santri')->result();
    }

    function insert_wali($data)
    {
        $this->db->insert('detail_santri', $data);
    }

    function delete_wali($id)
    {
        $this->db->where('id_santri_detail', $id);
        $this->db->delete('detail_santri');
    }

    function update_wali($id, $data)
    {
        $this->db->where('id_santri_detail', $id);
        $this->db->update('detail_santri', $data);
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

    function get_wali($id)
    {
        $this->db->where('id_santri', $id);
        return $this->db->get('detail_santri')->result();
    }

}
