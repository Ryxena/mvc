<?php
    class Product extends Controller {
        public function index() {
            // $this->view('template/header', $this->data['title']);
            $this->view('product/index');
            $this->view('template/footer');
        }
    }