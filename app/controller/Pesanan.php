<?php
error_reporting(false);
session_start();
class Pesanan extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION["login_status"])) {
      header('Location: http://localhost/mvc/public/Home');
    }
  }

  public function index()
  {
    $url = rtrim($_GET["url"], "/");
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    if (!is_null($url[1])) {
      $id_product = $url[1];

      $data['data'] = $this->model('Barang_model')->getDetailBarang($id_product);

      // var_dump($_SERVER['METHOD_REQUEST']);

      $this->view('pesan/pesan', $data);
    } else {
      $data['barang_name'] = $this->model('Barang_model')->getBarang();
      $data['id_barang'] = $_GET["id"];

      return $this->view('pesan/index', $data);
    }
  }

  public function toCart()
  {
    try {
      $username = $_SESSION['name'];
      $data['id_user'] = $this->model('User_model')->getIdUser($username);
      $data['pesanan_utama'] = $this->model('Pesanan_model')->hasStatusZero($data['id_user'][0]['id']);
      $data['pesanan_detail'] = $this->model('Pesanan_model')->detailPesanan($data['pesanan_utama'][0]['id']);
      $data['pesanan_image'] = $this->model('Pesanan_model')->getImage($data['pesanan_utama'][0]['id']);
      $data['pesanan_name'] = $this->model('Pesanan_model')->getName($data['pesanan_utama'][0]['id']);
      // var_dump($data['pesanan_detail']);
      $_SESSION['datas'] = $data;
      // var_dump($_SESSION['datas']);
      header('Location:http://localhost/mvc/public/Home');
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    // $this->view('home/index',$data);
    // var_dump($data['pesanan_utama']);
    // var_dump($_POST['id_product']);
  }
}

// select id from users where :w
