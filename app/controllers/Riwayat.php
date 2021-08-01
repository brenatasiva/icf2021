<?php

class Riwayat extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Riwayat";

        $this->view('templates/header', $data);
        $this->view('riwayat/index', $data);
        $this->view('templates/footer');
    }
}
