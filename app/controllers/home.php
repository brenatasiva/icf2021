<?php

class Home extends Controller
{
    public function __construct()
    {
        if ($_SESSION['xyz'] != "abudabi") {
            header('location: ' . BASEURL);
        }
    }
    
    public function index()
    {
        $data['judulHalaman'] = "ICF 2021";

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
