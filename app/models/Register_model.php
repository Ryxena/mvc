<?php

class Register_model {
    public $table = 'users';
    public $db;

    public function __construct() 
    {
        $this->db = new Database();
    }

    public function register($name, $email, $pass) {
        $this->db->query('INSERT INTO ' . $this->table . '(name, email, password) VALUES (:name,:email,:password)');
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $pass);
        $this->db->execute();
    }
}