<?php
    class Design extends Controller {

        public function index() {
            // $this->view('template/header', $this->data['title']);
            $this->view('design/index');
            // $this->view('template/footer');
        }
    }