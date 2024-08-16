<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    private $api_url;



    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model');
        $this->api_urlproyek = $this->config->item('rest_api_url') . 'proyek';
        $this->api_urllokasi = $this->config->item('rest_api_url') . 'lokasi';
    }

    public function index() {
        // Mengambil data proyek dan lokasi dari API
        $data['proyek'] = $this->Proyek_model->get_all_proyek($this->api_urlproyek);
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi($this->api_urllokasi);
        
        // Memuat view dengan data
        $this->load->view('proyek/index', $data);

    }

    public function create() {
        $this->load->view('proyek/create');
    }

    public function store() {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
        );
    
        $this->load->model('Proyek_model');
        $api_urlproyek = 'http://localhost:8080/proyek'; // URL API
        $result = $this->Proyek_model->insert_proyek($api_urlproyek, $data); // Mengirim data ke model
        
        if ($result === FALSE) {
            // Tangani kesalahan jika gagal
            echo "Gagal menambahkan proyek.";
        } else {
            redirect('proyek'); // Redirect setelah menyimpan jika berhasil
        }
    }
    
    

    public function edit($id) {
        $data['proyek'] = $this->Proyek_model->get_proyek($this->api_urlproyek, $id);
        $this->load->view('proyek/edit', $data);
    }

// application/controllers/Proyek.php
public function update($id) {
    $data = array(
        'namaProyek' => $this->input->post('namaProyek'),
        'client' => $this->input->post('client'),
        'tglMulai' => $this->input->post('tglMulai'),
        'tglSelesai' => $this->input->post('tglSelesai'),
        'pimpinanProyek' => $this->input->post('pimpinanProyek'),
        'keterangan' => $this->input->post('keterangan')
    );

    $this->load->model('Proyek_model');
    $api_urlproyek = $this->api_urlproyek; // URL API tanpa ID
    $result = $this->Proyek_model->update_proyek($api_urlproyek, $id, $data); // Mengirim data ke model
    
    if ($result === FALSE) {
        // Tangani kesalahan jika gagal
        echo "Gagal memperbarui proyek.";
    } else {
        redirect('proyek'); // Redirect setelah menyimpan jika berhasil
    }
}

    
    
    public function delete($id) {
        $this->Proyek_model->delete_proyek($this->api_urlproyek, $id);
        redirect('proyek');
    }
}

