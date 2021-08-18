<?php

class Event extends Controller
{
    public function index($category = null)
    {
        $data['listAllEvent'] = $this->model('Event_model')->getEventPerCategory($category);
        if ($category === "seminar") {
            $data['judulHalaman'] = "Seminar";
        } else if ($category === "lomba") {
            $data['judulHalaman'] = "Lomba";
        } else if ($category === "pameran") {
            $data['judulHalaman'] = "Pameran";
        } else {
            header('Location: ' . BASEURL);
        }
        $this->view('templates/header', $data);
        $this->view('event/index', $data);
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
}
