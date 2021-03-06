<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Klasifikasi_model');
		$this->load->model('Users_model');
		$this->load->model('Data_tes_model');
		$this->load->model('Data_set_model');
		$this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

	public function index()
	{
		$user = $this->ion_auth->user()->row();
		$id_santri = $this->Desa_model->get_by_id($user->id_santri);
		$nama_santri = $this->Desa_model->get_by_id($user->nama_santri);
        $this->breadcrumbs->push('Klasifikasi', '/klasifikasi');
        $this->breadcrumbs->push('tambah', 'dashboard');
        $data = array(
            'title'       => 'Data Prediksi Santri Izin' ,
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            'button' => 'Klasifikasi',
            'action' => site_url('klasifikasi/hitung_klasifikasi'),
		    'id_data_tes' => set_value('id_data_tes'),
		    'id_santri' => $id_santri,
			'nama_santri' => $nama_santri,
		    'id_user' => set_value('id_user'),
		    'tanggal' => set_value('tanggal'),
			'jenis_izin' => set_value('jenis_izin'),
		    'jarak_izin' => set_value('jarak_izin'),
		    'durasi_izin' => set_value('durasi_izin'),
		    'pelanggaran' => set_value('pelanggaran'),
			'prediksi' => set_value('prediksi'),
			'akurasi' => set_value('akurasi'),
			'konfirmasi' => set_value('konfirmasi'),
			

		);
		// if($this->Klasifikasi_model->get_data_by_date($id_santri) == TRUE ){
		// 	$data['content'] = 'klasifikasi/sudah_input';
		// } else {
			$data['content'] = 'klasifikasi/form';
		//}
		
        $this->load->view('layout/layout', $data);
	}

	public function hitung_klasifikasi()
	{
		$user = $this->ion_auth->user()->row();
		$nama_santri = $this->Desa_model->get_by_id($this->input->post('id_santri',TRUE))->nama_santri;
        $this->breadcrumbs->push('Klasifikasi', '/klasifikasi');
        $this->breadcrumbs->push('tambah', 'dashboard');
		$penginput = $this->Users_model->get_by_id($this->input->post('id_user',TRUE));

		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

				$id_santri = $this->input->post('id_santri',TRUE);
				$id_user = $this->input->post('id_user',TRUE);
				$tanggal = $this->input->post('tanggal',TRUE);
				$data = array(
					'title'       => 'Klasifikasi' ,
					'content'     => 'klasifikasi/hasil_klasifikasi', 
					'breadcrumbs' => $this->breadcrumbs->show(),
					'user'        => $user ,
					'button' => 'Klasifikasi',
					'action' => site_url('klasifikasi/simpan_hasil'),
					'nama_santri' => $nama_santri,
					'id_santri' => $this->input->post('id_santri',TRUE),
					'penginput' => $penginput, 
					'id_user' => $this->input->post('id_user',TRUE),
					'tanggal' => $this->input->post('tanggal',TRUE),
					'jenis_izin' => $this->input->post('jenis_izin',TRUE),
					'jarak_izin' => $this->input->post('jarak_izin',TRUE),
					'durasi_izin' => $this->input->post('durasi_izin',TRUE),
					'pelanggaran' => $this->input->post('pelanggaran',TRUE),
					
				);

				 /*  1. Ambil data ---> P(jenis_izin = ? | Y= ?) = hasil_bagi  */
				 $jenis_izin_terlambat  = $this->Klasifikasi_model->get_parameter('jenis_izin',$data["jenis_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $jenis_izin_tepat = $this->Klasifikasi_model->get_parameter('jenis_izin',$data["jenis_izin"],'Tidak Terlambat','Benar')->prediksi_bagi; 
 
				 /*  2.  */
				 $jarak_izin_terlambat  = $this->Klasifikasi_model->get_parameter('jarak_izin',$data["jarak_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $jarak_izin_tepat = $this->Klasifikasi_model->get_parameter('jarak_izin',$data["jarak_izin"],'Tidak Terlambat','Benar')->prediksi_bagi; 
 
				 /*  3.  */
				 $durasi_izin_terlambat  = $this->Klasifikasi_model->get_parameter('durasi_izin',$data["durasi_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $durasi_izin_tepat = $this->Klasifikasi_model->get_parameter('durasi_izin',$data["durasi_izin"],'Tidak Terlambat','Benar')->prediksi_bagi;
 
				 /*  4.  */
				 $pelanggaran_terlambat  = $this->Klasifikasi_model->get_parameter('pelanggaran',$data["pelanggaran"],'Terlambat','Benar')->prediksi_bagi;  
				 $pelanggaran_tepat = $this->Klasifikasi_model->get_parameter('pelanggaran',$data["pelanggaran"],'Tidak Terlambat','Benar')->prediksi_bagi;
				 // probabilitas
				 $prob_terlambat = $jenis_izin_terlambat * $jarak_izin_terlambat *
				 $durasi_izin_terlambat * $pelanggaran_terlambat;
				 $prob_tepat = $jenis_izin_tepat * $jarak_izin_tepat * $durasi_izin_tepat  * 
				 $pelanggaran_tepat;
                 
				 $jumlah = $prob_terlambat + $prob_tepat;
				 $hasil_prob_terlambat =  $prob_terlambat / $jumlah+1;
				 $hasil_prob_tepat =  $prob_tepat / $jumlah+1;
				 
				 if ($hasil_prob_terlambat > $hasil_prob_tepat) {
					 $prediksi = "Terlambat";
					 $akurasi = "Benar";
				 } else {
					 $prediksi = "Tidak Terlambat";
					 $akurasi = "Benar";
				 }
				 
				 $data["prob_terlambat"] = $hasil_prob_terlambat;
				 $data["prob_tepat"] = $hasil_prob_tepat;
				 $data["prediksi"] = $prediksi;
				 $data["akurasi"] = $akurasi;
				 $this->load->view('layout/layout', $data);
        }
	}
    
    public function simpan_hasil() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'id_santri' => $this->input->post('id_santri',TRUE),
				'nama_santri' => $this->input->post('nama_santri',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
				'tanggal' => $this->input->post('tanggal',TRUE),
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
				'prediksi' => $this->input->post('prediksi',TRUE),
				'akurasi' => $this->input->post('akurasi',TRUE),
				
		    );

            $this->Data_tes_model->insert($data);
			$this->index();
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('klasifikasi'));
        }
	}
	public function _rules() 
    {
		$this->form_validation->set_rules('id_santri', 'id santri', 'trim|required');
		$this->form_validation->set_rules('nama_santri', 'nama santri', 'trim|required');
		$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('jenis_izin', 'jenis_izin', 'trim|required');
		$this->form_validation->set_rules('jarak_izin', 'jarak_izin', 'trim|required');
		$this->form_validation->set_rules('durasi_izin', 'durasi_izin', 'trim|required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'trim|required');
		$this->form_validation->set_rules('id_data_tes', 'id_data_tes', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }	



	public function index1()
	{
		$user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('tambah', 'dashboard');
        $data = array(
            'title'       => 'Data Uji Coba Training' ,
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            'button1' => 'Klasifikasi',
            'action' => site_url('klasifikasi/hitung_klasifikasi1'),
		    'id_data_set' => set_value('id_data_set'),
		    'id_user' => set_value('id_user'),
		    'tanggal' => set_value('tanggal'),
			'jenis_izin' => set_value('jenis_izin'),
		    'jarak_izin' => set_value('jarak_izin'),
		    'durasi_izin' => set_value('durasi_izin'),
		    'pelanggaran' => set_value('pelanggaran'),
			'prediksi' => set_value('prediksi'),
			'akurasi' => set_value('akurasi'),

		);
		// if($this->Klasifikasi_model->get_data_by_date($id_santri) == TRUE ){
		// 	$data['content'] = 'klasifikasi/sudah_input';
		// } else {
			$data['content'] = 'klasifikasi/form1';
		//}
		
        $this->load->view('layout/layout', $data);
	}

	public function hitung_klasifikasi1()
	{
		$user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Klasifikasi', '/klasifikasi');
        $this->breadcrumbs->push('tambah', 'dashboard');
		$penginput = $this->Users_model->get_by_id($this->input->post('id_user',TRUE));

		$this->_rules1();
        if ($this->form_validation->run() == FALSE) {
            $this->index1();
        } else {

				$id_user = $this->input->post('id_user',TRUE);
				$tanggal = $this->input->post('tanggal',TRUE);
				$data = array(
					'title'       => 'Klasifikasi Uji Coba' ,
					'content'     => 'klasifikasi/hasil_klasifikasi1', 
					'breadcrumbs' => $this->breadcrumbs->show(),
					'user'        => $user ,
					'button1' => 'Klasifikasi',
					'action' => site_url('klasifikasi/simpan_hasil1'),
					'penginput' => $penginput, 
					'id_user' => $this->input->post('id_user',TRUE),
					'id_data_set' => $this->input->post('id_data_set',TRUE),
					'tanggal' => $this->input->post('tanggal',TRUE),
					'jenis_izin' => $this->input->post('jenis_izin',TRUE),
					'jarak_izin' => $this->input->post('jarak_izin',TRUE),
					'durasi_izin' => $this->input->post('durasi_izin',TRUE),
					'pelanggaran' => $this->input->post('pelanggaran',TRUE),
					
				);

				 /*  1. Ambil data ---> P(jenis_izin = ? | Y= ?) = hasil_bagi  */
				 $jenis_izin_terlambat  = $this->Klasifikasi_model->get_parameter1('jenis_izin',$data["jenis_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $jenis_izin_tepat = $this->Klasifikasi_model->get_parameter1('jenis_izin',$data["jenis_izin"],'Tidak Terlambat','Benar')->prediksi_bagi; 
 
				 /*  2.  */
				 $jarak_izin_terlambat  = $this->Klasifikasi_model->get_parameter1('jarak_izin',$data["jarak_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $jarak_izin_tepat = $this->Klasifikasi_model->get_parameter1('jarak_izin',$data["jarak_izin"],'Tidak Terlambat','Benar')->prediksi_bagi; 
 
				 /*  3.  */
				 $durasi_izin_terlambat  = $this->Klasifikasi_model->get_parameter1('durasi_izin',$data["durasi_izin"],'Terlambat','Benar')->prediksi_bagi;  
				 $durasi_izin_tepat = $this->Klasifikasi_model->get_parameter1('durasi_izin',$data["durasi_izin"],'Tidak Terlambat','Benar')->prediksi_bagi;
 
				 /*  4.  */
				 $pelanggaran_terlambat  = $this->Klasifikasi_model->get_parameter1('pelanggaran',$data["pelanggaran"],'Terlambat','Benar')->prediksi_bagi;  
				 $pelanggaran_tepat = $this->Klasifikasi_model->get_parameter1('pelanggaran',$data["pelanggaran"],'Tidak Terlambat','Benar')->prediksi_bagi;
				 // probabilitas
				 $prob_terlambat = $jenis_izin_terlambat * $jarak_izin_terlambat *
				 $durasi_izin_terlambat * $pelanggaran_terlambat;
				 $prob_tepat = $jenis_izin_tepat * $jarak_izin_tepat * $durasi_izin_tepat  * 
				 $pelanggaran_tepat;
				 
				 $jumlah = $prob_terlambat + $prob_tepat;
				 $hasil_prob_terlambat =  $prob_terlambat / $jumlah+1;
				 $hasil_prob_tepat =  $prob_tepat / $jumlah+1;
				 
				 if ($hasil_prob_terlambat > $hasil_prob_tepat) {
					 $prediksi = "Terlambat";
					 $akurasi = "Benar";
				 } else {
					 $prediksi = "Tidak Terlambat";
					 $akurasi = "Benar";
				 }
				 
				 $data["prob_terlambat"] = $hasil_prob_terlambat;
				 $data["prob_tepat"] = $hasil_prob_tepat;
				 $data["prediksi"] = $prediksi;
				 $data["akurasi"] = $akurasi;
				 $this->load->view('layout/layout', $data);
        }
	}

    public function simpan_hasil1() 
    {
        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {
            $this->create1();
        } else {
            $data = array(
				'id_user' => $this->input->post('id_user',TRUE),
				'tanggal' => $this->input->post('tanggal',TRUE),
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
				'prediksi' => $this->input->post('prediksi',TRUE),
				'akurasi' => $this->input->post('akurasi',TRUE),
				
		    );

            $this->Data_tes_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('klasifikasi'));
        }
    }
    public function _rules1() 
    {
		$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('jenis_izin', 'jenis_izin', 'trim|required');
		$this->form_validation->set_rules('jarak_izin', 'jarak_izin', 'trim|required');
		$this->form_validation->set_rules('durasi_izin', 'durasi_izin', 'trim|required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'trim|required');
		$this->form_validation->set_rules('id_data_set', 'id_data_set', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }	

}

/* End of file Klasifikasi.php */
/* Location: ./application/controllers/Klasifikasi.php */