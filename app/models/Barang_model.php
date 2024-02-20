<?php
    class Barang_model {
        private $table = "barangs";
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }
    
        public function getDetailBarang($id) {
            $this->db->query("SELECT * FROM {$this->table} WHERE id = {$id}");
            return $this->db->resultSet();
        }

        public function getBarang() {
            $this->db->query("SELECT * FROM {$this->table}");
            return $this->db->resultSet();
        } 
    }
?>