<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestClient {
    private $base_url;

    public function __construct() {
        $this->base_url = 'http://localhost:8080/';  // Ganti sesuai dengan base URL REST API Anda
    }

    public function get($endpoint) {
        $ch = curl_init($this->base_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    public function post($endpoint, $data) {
        $ch = curl_init($this->base_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    public function put($endpoint, $data) {
        $ch = curl_init($this->base_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    public function delete($endpoint) {
        $ch = curl_init($this->base_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}
