<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    public function get_all_proyek($url) {
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function get_proyek($url, $id) {
        $response = file_get_contents($url . '/' . $id);
        return json_decode($response, true);
    }


        public function insert_proyek($url, $data) {
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/json\r\n",
                    'method'  => 'POST',
                    'content' => json_encode($data),
                ),
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
    
            if ($result === FALSE) {
                // Tangani kesalahan jika terjadi
                log_message('error', 'Gagal menambahkan proyek.');
                return FALSE;
            } else {
                // Proses jika berhasil
                return $result;
            }
        }
    
    

  // application/models/Proyek_model.php
public function update_proyek($url, $id, $data) {
    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'PUT',
            'content' => json_encode($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url . '/' . $id, false, $context);

    return $result !== FALSE;
}

        

    public function delete_proyek($url, $id) {
        $options = [
            'http' => [
                'method' => 'DELETE',
            ],
        ];
        $context = stream_context_create($options);
        return file_get_contents($url . '/' . $id, false, $context);
    }
}

