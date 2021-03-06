<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_tes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_tes_model');
        $this->load->model('Data_set_model');
        $this->load->model('Users_model');
        $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_tes = $this->Data_tes_model->get_all();
        $data_tes ['data_count'] = $this->Data_tes_model->get_count();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data Testing Sementara', '/data_tes');
        if($this->ion_auth->is_admin()){
            $data_tes = $this->Data_tes_model->get_all();
        } else {
            $data_tes = $this->Data_tes_model->get_by_desa($user->id);
        }
        $data = array(
            'title'       => 'Data Testing Sementara' ,
            'content'     => 'histori/data_tes_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_tes_data' => $data_tes
        );
        $this->load->view('layout/layout', $data);
    }
    
    public function benar()
    {
     $data['Benar'] = $this->session->Data_tes_model->get_total_benar();
     $this->load->view('data_tes/data_tes_list', $data);
    }
    
    public function salah()
    {
     $d['Tidak_Benar'] = $this->session->Data_tes_model->get_total_salah();
     $this->load->view('data_tes/data_tes_list', $d);
    }
    
    public function read($id) 
    {
        $data_tes ['data_count'] = $this->Data_tes_model->get_count();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('detail', '/data_tes/read');
        $row = $this->Data_tes_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_testing' ,
                'content'     => 'histori/data_tes_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                
				'id_data_tes' => $row->id_data_tes,
				'id_santri' => $row->id_santri,
				'id_user' => $row->id_user,
                'tanggal' => $row->tanggal,
                'tanggal_kembali' => $row->tanggal_kembali,
                'jenis_izin' => $row->jenis_izin,
				'jarak_izin' => $row->jarak_izin,
				'durasi_izin' => $row->durasi_izin,
				'pelanggaran' => $row->pelanggaran,
                'prediksi' => $row->prediksi,
                'konfirmasi' => $row->konfirmasi,
                'kenyataan' => $row->kenyataan,

                'Akurasi_Benar' => $row->Akurasi_Benar,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('histori'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('tambah', '/data_tes/create');
        $data = array(
            'title'       => 'Data_testing' ,
            'content'     => 'histori/data_tes_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,

            'button' => 'Tambah',
            'action' => site_url('data_tes/create_action'),
		    'id_data_tes' => set_value('id_data_tes'),
		    'id_santri' => set_value('id_santri'),
		    'id_user' => set_value('id_user'),
            'tanggal' => set_value('tanggal'),
            'tanggal_kembali' => set_value('tanggal_kembali'),	  
            'jenis_izin' => set_value('jenis_izin'),
		    'jarak_izin' => set_value('jarak_izin'),
		    'durasi_izin' => set_value('durasi_izin'),
		    'pelanggaran' => set_value('pelanggaran'),
            'prediksi' => set_value('prediksi'),
            'konfirmasi' => set_value('konfirmasi'),
            'kenyataan' => set_value('kenyataan'),
		);
        $this->load->view('layout/layout', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'id_santri' => $this->input->post('id_santri',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
                'tanggal' => $this->input->post('tanggal',TRUE),
                'tanggal_kembali' => $this->input->post('tanggal_kembali',TRUE),
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
                'prediksi' => $this->input->post('prediksi',TRUE),
                'akurasi' => $this->input->post('akurasi',TRUE),
                'konfirmasi' => $this->input->post('konfirmasi',TRUE),
                'kenyataan' => $this->input->post('kenyataan',TRUE),
		    );

            $this->Data_tes_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_tes'));
        }
    }
    
    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('update', '/data_tes/update');
        
        $row = $this->Data_tes_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_testing' ,
                'content'     => 'histori/data_tes_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('data_tes/update_action'),
				'id_data_tes' => set_value('id_data_tes', $row->id_data_tes),
				'id_santri' => set_value('id_santri', $row->id_santri),
				'id_user' => set_value('id_user', $row->id_user),
                'tanggal' => set_value('tanggal', $row->tanggal),
                'tanggal_kembali' => set_value('tanggal_kembali', $row->tanggal_kembali),
                'jenis_izin' => set_value('jenis_izin', $row->jenis_izin),
                'jarak_izin' => set_value('jarak_izin', $row->jarak_izin),
                'durasi_izin' => set_value('durasi_izin', $row->durasi_izin),
                'pelanggaran' => set_value('pelanggaran', $row->pelanggaran),
                'prediksi' => set_value('prediksi', $row->prediksi),
                'akurasi' => set_value('akurasi', $row->akurasi),
                'konfirmasi' => set_value('konfirmasi', $row->konfirmasi),
                'kenyataan' => set_value('kenyataan', $row->kenyataan),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('histori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_data_tes', TRUE));
        } else {
            $data = array(
				'id_santri' => $this->input->post('id_santri',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
                'tanggal' => $this->input->post('tanggal',TRUE),
                'tanggal_kembali' => $this->input->post('tanggal_kembali',TRUE),
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
                'prediksi' => $this->input->post('prediksi',TRUE),
                'akurasi' => $this->input->post('akurasi',TRUE),
                'konfirmasi' => $this->input->post('konfirmasi',TRUE),
                'kenyataan' => $this->input->post('kenyataan',TRUE),
		    );

            $this->Data_tes_model->update($this->input->post('id_data_tes', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_tes'));
        }
    }

    public function approve()
    {
        $data_tes = $this->Data_tes_model->get_by_id($this->input->post('id',TRUE));
        $data = array(
            'jenis_izin' => $data_tes->jenis_izin,
            'jarak_izin' => $data_tes->jarak_izin,
            'durasi_izin' => $data_tes->durasi_izin,
            'pelanggaran' => $data_tes->pelanggaran,
            'prediksi' => $this->input->post('prediksi',TRUE),
            'akurasi' => $this->input->post('akurasi',TRUE),
            'konfirmasi' => $this->input->post('konfirmasi',TRUE),
            'kenyataan' => $this->input->post('kenyataan',TRUE),
        );
        $data_status = array(
            'status' => '1',
        );
        $tambah_dataset = $this->Data_set_model->insert($data);
        $ganti_status = $this->Data_tes_model->update($this->input->post('id',TRUE),$data_status);
        redirect('data_tes','refresh');
    }

    
    public function delete($id) 
    {
        $row = $this->Data_tes_model->get_by_id($id);

        if ($row) {
            $this->Data_tes_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_tes'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_tes'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('id_santri', 'id desa', 'trim|required');
		$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('tanggal_kembali', 'tanggal_kembali', 'trim|required');
		$this->form_validation->set_rules('jenis_izin', 'jenis izin', 'trim|required');
		$this->form_validation->set_rules('jarak_izin', 'jarak izin', 'trim|required');
		$this->form_validation->set_rules('durasi_izin', 'durasi izin', 'trim|required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'trim|required');
        $this->form_validation->set_rules('prediksi', 'prediksi', 'trim|required');
        $this->form_validation->set_rules('akurasi', 'akurasi', 'trim|required');
        $this->form_validation->set_rules('konfirmasi', 'konfirmasi', 'trim|required');
        $this->form_validation->set_rules('kenyataan', 'kenyataan', 'trim|required');

		$this->form_validation->set_rules('id_data_tes', 'id_data_tes', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

