<?php

class Siswa extends Controller {
    public function index() {
        $data['title'] = 'Data Siswa';
        $data['users'] = $this->model('Siswa_model')->getAllSiswa();
        // $dataUsers = $data['users'];
        // var_dump($data);
        $this->view('siswa/index', $data);
    }
}