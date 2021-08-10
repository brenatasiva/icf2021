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

    public function detil($event = null)
    {
        if ($event == null) {
            header('Location: ' . BASEURL . '/event');
        }
        if (!$data['listEvent'] = $this->model('Event_model')->getEvent($event))
            header('Location: ' . BASEURL . '/event');
        $data['judulHalaman'] = $data['listEvent']['nama'];
        $data['paramEvent'] = $event;
        $this->view('templates/header', $data);
        $this->view('event/detil', $data);
        $this->view('templates/footer');
    }

    public function formDaftar($event = null)
    {
        if ($event == null) {
            header('Location: ' . BASEURL . '/event');
        }
        if (!$data['listEvent'] = $this->model('Event_model')->getEvent($event))
            header('Location: ' . BASEURL . '/event');
        $data['judulHalaman'] = "Daftar Event";
        $this->view('templates/header', $data);
        $this->view('event/daftar', $data);
        $this->view('templates/footer');
    }

    public function daftarEvent()
    {
        if (!isset($_SESSION['username'])) {
            header('Location: ' . BASEURL . '/user/login');
        } else {
            if ($_POST['eid'] == null) {
                header('Location: ' . BASEURL . '/event');
            } else {
                if ($this->model('User_model')->insertPendaftaran($_POST) > 0) {
                    Flasher::setFlash("Berhasil", "Mendaftar", "success");
                    header('Location: ' . BASEURL . '/event');
                } else {
                    Flasher::setFlash("Gagal", "Mendaftar", "danger");
                    header('Location: ' . BASEURL . '/event');
                }
            }
        }
    }

    public function hapusEvent()
    {
        # code...
    }
}
