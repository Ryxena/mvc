<?php 

class Home extends Controller {
    public $data = ['title' => 'apa yuh'];

    public function Index(){
        // echo "existed";
        // $this->view('template/header', $this->data['title']);
        $data['barangs'] = $this->model('Barang_model')->getBarang();
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
    
}