<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_set extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_set_model');
        $this->load->model('Data_tes_model');
        $this->load->model('Klasifikasi_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }
    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('tambah', '/data_set/create');
        $data = array(
            'title'       => 'Data_set' ,
            'content'     => 'data_set/data_set_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,

            'button' => 'Tambah',
            'action' => site_url('data_tes/create_action'),
		    'id_data_set' => set_value('id_data_set'),
		    'id_santri' => set_value('id_santri'),
		    'id_user' => set_value('id_user'),
            'jenis_izin' => set_value('jenis_izin'),
		    'jarak_izin' => set_value('jarak_izin'),
		    'durasi_izin' => set_value('durasi_izin'),
		    'pelanggaran' => set_value('pelanggaran'),
            'prediksi' => set_value('prediksi'),
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
                'id_data_set' => $this->input->post('id_data_set',TRUE),
				'id_santri' => $this->input->post('id_santri',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
                'prediksi' => $this->input->post('prediksi',TRUE),
		    );

            $this->Data_set_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_set'));
        }
    }


    public function index()
    {
        $data_set = $this->Data_set_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data Training', '/data_set');

        $data = array(
            'title'       => 'Data Training' ,
            'content'     => 'data_set/data_set_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_set_data' => $data_set
        );
       

        $this->load->view('layout/layout', $data);
    }

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('detail', '/data_set/read');
        $row = $this->Data_set_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Uji Coba Data_set' ,
                'content'     => 'data_set/data_set_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                
                'id_data_set' => $row->id_data_set,			
                'jenis_izin' => $row->jenis_izin,
				'jarak_izin' => $row->jarak_izin,
				'durasi_izin' => $row->durasi_izin,
				'pelanggaran' => $row->pelanggaran,
				'prediksi' => $row->prediksi,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_set'));
        }
    }
	

    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('update', '/data_set/update');
        
        $row = $this->Data_set_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_set' ,
                'content'     => 'data_set/data_set_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('data_set/update_action'),
                'id_data_set' => set_value('id_data_set', $row->id_data_set),
                'jenis_izin' => set_value('jenis_izin', $row->jenis_izin),
				'jarak_izin' => set_value('jarak_izin', $row->jarak_izin),
				'durasi_izin' => set_value('durasi_izin', $row->durasi_izin),
				'pelanggaran' => set_value('pelanggaran', $row->pelanggaran),
				'prediksi' => set_value('prediksi', $row->prediksi),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_set'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_data_set', TRUE));
        } else {
            $data = array(
				'jenis_izin' => $this->input->post('jenis_izin',TRUE),
				'jarak_izin' => $this->input->post('jarak_izin',TRUE),
				'durasi_izin' => $this->input->post('durasi_izin',TRUE),
				'pelanggaran' => $this->input->post('pelanggaran',TRUE),
				'prediksi' => $this->input->post('prediksi',TRUE),		    );

            $this->Data_set_model->update($this->input->post('id_data_set', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_set'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_set_model->get_by_id($id);

        if ($row) {
            $this->Data_set_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_set'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_set'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('jenis_izin', 'jenis_izin', 'trim|required');
		$this->form_validation->set_rules('jarak_izin', 'jarak_izin', 'trim|required');
		$this->form_validation->set_rules('durasi_izin', 'durasi_izin', 'trim|required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'trim|required');
		$this->form_validation->set_rules('prediksi', 'prediksi', 'trim|required');

		$this->form_validation->set_rules('id_data_set', 'id_data_set', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}