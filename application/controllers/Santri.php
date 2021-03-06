<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class santri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_santri = $this->Desa_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Santri', '/santri');

        $data = array(
            'title'       => 'Data Santri' ,
            'content'     => 'santri/santri_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_santri' => $data_santri
        );

        $this->load->view('layout/layout', $data);
    }

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Santri', '/santri');
        $this->breadcrumbs->push('detail', '/santri/read');
        $row = $this->Desa_model->get_by_id($id);
        $wali = $this->Desa_model->get_wali($id);
        if ($row) {
            $data = array(
                'title'       => 'Data Santri' ,
                'content'     => 'santri/santri_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                'wali'       => $wali ,
				'id_santri' => $row->id_santri,
				'nama_santri' => $row->nama_santri,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('santri'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Santri', '/santri');
        $this->breadcrumbs->push('tambah', '/santri/create');
        $data = array(
            'title'       => 'Santri' ,
            'content'     => 'santri/santri_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            'button' => 'Tambah',
            'action' => site_url('santri/create_action'),
		    'id_santri' => set_value('id_santri'),
		    'nama_santri' => set_value('nama_santri'),
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
				'nama_santri' => $this->input->post('nama_santri',TRUE),
		    );

            $this->Desa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('santri'));
        }
    }
    
    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('santri', '/santri');
        $this->breadcrumbs->push('update', '/santri/update');
        
        $row = $this->Desa_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data Santri' ,
                'content'     => 'santri/santri_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('santri/update_action'),
				'id_santri' => set_value('id_santri', $row->id_santri),
				'nama_santri' => set_value('nama_santri', $row->nama_santri),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            redirect(site_url('santri'));
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_santri', TRUE));
        } else {
            $data = array(
				'nama_santri' => $this->input->post('nama_santri',TRUE),
		    );

            $this->Desa_model->update($this->input->post('id_santri', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('santri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Desa_model->get_by_id($id);

        if ($row) {
            $this->Desa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('santri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('santri'));
        }
    }

    public function tambah_wali()
    {
            $data = array(
                'id_santri' => $this->input->post('id_santri'),
				'wali' => $this->input->post('wali'),
                'alamat' => $this->input->post('alamat'),
		    );
            $this->Desa_model->insert_wali($data);
            redirect(site_url('santri/read/'.$this->input->post('id_santri')));
    }

    public function delete_wali($id)
    {
        $row = $this->Desa_model->get_wali_by_id($id);
        if($row) {
            $this->Desa_model->delete_wali($id);
            redirect(site_url('santri/read/'.$row->id_santri));
        }       
    }

    public function update_wali()
    {
        $row = $this->Desa_model->get_wali_by_id($this->input->post('id_santri_detail_up', TRUE));
        if($row){
            $data = array(
				'wali' => $this->input->post('wali_up',TRUE),
                'alamat' => $this->input->post('alamat_up',TRUE),
		    );
            $this->Desa_model->update_wali($this->input->post('id_santri_detail_up', TRUE), $data);
            redirect(site_url('santri/read/'.$row->id_santri));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('nama_santri', 'nama santri', 'trim|required');

		$this->form_validation->set_rules('id_santri', 'id_santri', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
