<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_tes_model extends CI_Model
{

    public $table = 'data_tes';
    public $id = 'id_data_tes';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('status', '0');
        return $this->db->get($this->table)->result();
    }

    // get all
    function get_by_desa($id_santri)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('status', '0');
        $this->db->where('id_santri', $id_santri);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_count()
    {
        $sql =  " 
                SELECT COUNT(akurasi = 'Benar') as Akurasi_Benar FROM data_tes";
        $result = $this->db->query($sql);
        return $result->row();
     }

     function get_total_benar()
     {
        $sql = $this->db->query('SELECT * FROM data_tes WHERE akurasi = "Benar"',);
        $benar =$sql->num_rows();
        return $benar;    
      }

      function get_total_salah()
      {
         $sql = $this->db->query('SELECT * FROM data_tes WHERE akurasi = "Tidak Benar"',);
         $salah =$sql->num_rows();
         return $salah;    
       }
    // get total rows
    function total_rows($q = NULL) {
    $this->db->like('id_data_tes', $q);
	$this->db->or_like('id_santri', $q);
    $this->db->or_like('id_user', $q);
    $this->db->or_like('nama_santri ', $q);
    $this->db->or_like('tanggal', $q);
    $this->db->or_like('tanggal_kembali', $q);
    $this->db->or_like('jenis_izin', $q);
    $this->db->or_like('jarak_izin', $q);
    $this->db->or_like('durasi_izin', $q);
    $this->db->or_like('pelanggaran', $q);
    $this->db->or_like('prediksi', $q);
    $this->db->or_like('konfirmasi', $q);
    $this->db->or_like('kenyataan', $q);
    $this->db->from($this->table);
    return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_data_tes', $q);
        $this->db->or_like('id_santri', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('nama_santri ', $q);
        $this->db->or_like('tanggal', $q);
        $this->db->or_like('tanggal_kembali', $q);
        $this->db->or_like('jenis_izin', $q);
        $this->db->or_like('jarak_izin', $q);
        $this->db->or_like('durasi_izin', $q);
        $this->db->or_like('pelanggaran', $q);
        $this->db->or_like('prediksi', $q);
        $this->db->or_like('konfirmasi', $q);
        $this->db->or_like('kenyataan', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return;
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
