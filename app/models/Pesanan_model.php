<?php
    class Pesanan_model {
        private $table = "pesanan";
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }
    
        public function getBarangName($tes) {
            $this->db->query("SELECT * FROM " . $tes);
            return $this->db->resultSet();
        }
    }
