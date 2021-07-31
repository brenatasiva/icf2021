<?php

class About extends Controller
{
    public function index($nama = 'Mario', $pekerjaan = 'mahasiswa')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Index';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
