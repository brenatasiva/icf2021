<?php

class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['xyz'] != "abudabi") {
            header('location: ' . BASEURL);
        }
    }
    
    public function index()
    {
        $data['judulHalaman'] = "About - ICF 2021";

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
