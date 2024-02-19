<?php
  class Pesanan extends Controller {
    public function __construct() {
      if(!isset($_SESSION["login_status"])) {
          header('Location: http://localhost/mvc/public/Home');
      }
    }

    public function index() {
      $data['barang_name'] = $this->model('Barang_model')->getBarang();
      $data['id_barang'] = $_GET["id"];
      return $this->view('pesan/index', $data);
    }
  }  
?>