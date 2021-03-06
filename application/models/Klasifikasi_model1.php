<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    /* Ambil data ---> P(kemiringan_lereng = ? | Y= ?) = hasil_bagi  */
    public function get_parameter($parameter,$val_param,$prediksi)
    {
    	$sql = "
    		SELECT (
    			select count(prediksi) 
    			from data_tes 
    			where `$parameter`= '$val_param' AND prediksi='$prediksi'
    		) / COUNT($parameter) as prediksi_bagi
			FROM `data_tes`
			WHERE $parameter = '$val_param' ";
    	$query=$this->db->query($sql);
        return $query->row();
    }

	public function get_data_by_date($id_santri)
	{
		$tahun_sekarang = date('Y');
		$bulan_sekarang = date('m');
		$this->db->where('id_santri', $id_santri);
		$this->db->where('MONTH(tanggal)', $bulan_sekarang);
		$this->db->where('YEAR(tanggal)', $tahun_sekarang );
		if($this->db->get('data_tes')->result()){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file Klasifikasi_model.php */
/* Location: ./application/models/Klasifikasi_model.php */