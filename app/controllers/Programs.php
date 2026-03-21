<?php
class Programs extends Controller {
    public function index() {
        $this->view('layout/main', ['view' => 'programs/index']);
    }
}
