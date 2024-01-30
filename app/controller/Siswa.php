<?php

class Siswa extends Controller{
    public function index()
    {
        $data['title'] = "Dataaa siswaaa";
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        // var_dump($data);
        $this->view('siswa/index', $data);
    }
}