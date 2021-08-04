<?php

class Event extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Event";
        $data['listAllEvent'] = $this->model('Event_model')->getAllEvent();
        $this->view('templates/header', $data);
        $this->view('event/index', $data);
        $this->view('templates/footer');
    }

    public function detil()
    {
        $data['judulHalaman'] = "Detil Event";
        $data['listAllEvent'] = $this->model('Event_model')->getEvent($_POST);
        $this->view('templates/header', $data);
        $this->view('event/detil', $data);
        $this->view('templates/footer');
    }
}
