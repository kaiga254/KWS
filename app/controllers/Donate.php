<?php
class Donate extends Controller {
    public function index() {
        $this->view('layout/main', ['view' => 'donate/index']);
    }
}
