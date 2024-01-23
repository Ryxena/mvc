<?php 

class Home extends Controller {
    public $data = ['title' => 'apa yuh'];

    public function Index(){
        // echo "existed";
        $this->view('template/header', $this->data['title']);
        $this->view('home/index');
        $this->view('template/footer');
    }

    public function design() {
        $this->view('template/header', $this->data['title']);
        $this->view('design/index');
        $this->view('template/footer');
    }
    public function product() {
        // $this->view('template/header', $this->data['title']);
        $this->view('product/index');
        // $this->view('template/footer');
    }
}