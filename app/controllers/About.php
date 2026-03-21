<?php
class About extends Controller {
    public function index() {
        $this->view('layout/main', ['view' => 'about/index']);
    }
}
