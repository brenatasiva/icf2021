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
        $data['listEvent'] = $this->model('Event_model')->getEvent($_POST);
        $this->view('templates/header', $data);
        $this->view('event/detil', $data);
        $this->view('templates/footer');
    }

    public function formDaftar()
    {
        $data['judulHalaman'] = "Daftar Event";
        $this->view('templates/header', $data);
        $this->view('event/daftar', $data);
        $this->view('templates/footer');
    }

    public function daftarEvent()
    {
        if ($this->model('User_model')->insertPendaftaran($_POST) > 0) {
            $this->index();
        } else {
        }
    }

    public function hapusEvent()
    {
        # code...
    }
}
