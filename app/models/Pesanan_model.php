<?php
class Pesanan_model
{
    private $table = "pesanans";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBarangName($tes)
    {
        $this->db->query("SELECT * FROM " . $tes);
        return $this->db->resultSet();
    }

    public function hasStatusZero($iduser)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE user_id = {$iduser} AND status = 0 limit 1");
        return $this->db->resultSet();
    }

    public function detailPesanan($pesanan_id)
    {
        $this->db->query("SELECT * FROM pesanan_details WHERE pesanan_id = {$pesanan_id}");
        return $this->db->resultSet();
    }

    public function getImage($pesanan_id) {
        $this->db->query("SELECT barangs.gambar FROM pesanan_details JOIN barangs ON pesanan_details.barang_id = barangs.id WHERE pesanan_details.pesanan_id = $pesanan_id;");
        return $this->db->resultSet();
    }
    public function getName($pesanan_id) {
        $this->db->query("SELECT barangs.nama_barang FROM pesanan_details JOIN barangs ON pesanan_details.barang_id = barangs.id WHERE pesanan_details.pesanan_id = $pesanan_id;");
        return $this->db->resultSet();
    }

    public function createDetailPesanan($idbarang, $pesanan_id, $ukuran, $jumlah, $harga) {
        //insert into `pesanans` (`user_id`, tanggal, status, jumlah_harga, updated_at, created_at) values (?, ?, ?, ?, ?, ?)
        $this->db->query("INSERT INTO `pesanan_details` (barang_id, pesanan_id, ukuran, jumlah, jumlah_harga) VALUES (:barang_id, :pesanan_id, :ukuran, :jumlah, :jumlah_harga);");
        $this->db->bind(":barang_id", $idbarang);
        $this->db->bind(":pesanan_id", $pesanan_id);
        $this->db->bind(":ukuran", $ukuran);
        $this->db->bind(":jumlah", $jumlah);
        $this->db->bind(":jumlah_harga", $harga);
        $this->db->execute();
    }
    //insert into `pesanans` (`user_id`, tanggal, status, jumlah_harga, updated_at, created_at) values (?, ?, ?, ?, ?, ?)
    public function createPesanan($userid, $harga) {
        $date = date('Y-m-d', time());
        $this->db->query("INSERT INTO `pesanans` (`user_id`, `tanggal`, `status`, `jumlah_harga`) VALUES (:id, :tanggal, :status, :jumlah_harga);");
        $this->db->bind(":id", $userid);
        $this->db->bind(":tanggal", $date);
        $this->db->bind(":status", 0);
        $this->db->bind(":jumlah_harga", $harga);
        $this->db->resultSet();
        return $this->db->lastid();
    }
    public function hasPesanan($pesanan_id, $iduser){
        $this->db->query("SELECT * FROM pesanan_details WHERE barang_id =  AND pesanan_id =  LIMIT 1;");
    }
}
