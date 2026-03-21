<?php
class Contact extends Controller {
    public function index() {
        $this->view('layout/main', ['view' => 'contact/index']);
    }
}
