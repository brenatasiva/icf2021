<?php

class Schedule extends Controller
{
    public function __construct()
    {
        if ($_SESSION['xyz'] != "abudabi") {
            header('location: ' . BASEURL);
        }
    }

    public function index()
    {
        $data['judulHalaman'] = "Schedule - ICF 2021";
        $data['list_schedule'] = $this->model('Custom_model')->getSchedule("2021-09-26");
        $data['current_schedule'] = $this->model('Custom_model')->getCurrentSchedule();

        $this->view('templates/header', $data);
        $this->view('schedule/index', $data);
        $this->view('templates/footer');
    }
}
