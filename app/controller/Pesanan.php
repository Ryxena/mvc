<?php
  class Pesanan extends Controller {
    public function index() {
      $data['barang_name'] = $this->model('Barang_model')->getPesananDetail();
      return $this->view('pesanan/index', $data);
    }
  }  
?>