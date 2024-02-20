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
}
