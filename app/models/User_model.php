<?php

class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getIdUser($name)
    {
        $this->db->query("SELECT id FROM {$this->table} WHERE {$this->table}.name = '{$name}'");
        return $this->db->resultSet();
    }
}
