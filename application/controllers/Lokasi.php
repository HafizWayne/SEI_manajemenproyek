<?php
class Lokasi extends CI_Controller {

    private $api_url;

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->api_url = $this->config->item('rest_api_url') . 'lokasi';
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi($this->api_url);
        $this->load->view('lokasi/index', $data);
    }

    public function create() {
        $this->load->view('lokasi/create');
    }

    public function store() {
        $this->Lokasi_model->insert_lokasi($this->api_url, $this->input->post());
        redirect('proyek');
    }

    public function edit($id) {
        $data['lokasi'] = $this->Lokasi_model->get_lokasi($this->api_url, $id);
        $this->load->view('lokasi/edit', $data);
    }

    public function update($id) {
        $this->Lokasi_model->update_lokasi($this->api_url, $id, $this->input->post());
        redirect('proyek');
    }

    public function delete($id) {
        $this->Lokasi_model->delete_lokasi($this->api_url, $id);
        redirect('proyek');
    }
}

