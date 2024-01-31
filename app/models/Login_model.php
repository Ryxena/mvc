<?php

class Login_model {
    public $table = 'users';
    public $db;

    public function __construct() 
    {
        $this->db = new Database();
    }
}