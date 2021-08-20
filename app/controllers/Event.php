<?php

class Event extends Controller
{
    public function index($category = null)
    {
        $data['listAllEvent'] = $this->model('Event_model')->getEventPerCategory($category);
        if ($category === "seminar") {
            $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran();
            $data['judulHalaman'] = "Seminar";
        } else if ($category === "lomba") {
            $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran();
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
            Flasher::setFlash("Perhatian", "Silahkan login sebelum daftar", "danger");
            header('Location: ' . BASEURL . '/user/login');
        } else {
            if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                Flasher::setFlash("Perhatian", "Anda telah terdaftar di event ini", "danger");
                header('Location: ' . BASEURL . '/home');
            } else {
                if ($_POST['eid'] == null) {
                    header('Location: ' . BASEURL . '/home');
                } else {
                    if ($this->model('User_model')->insertPendaftar($_POST) > 0) {
                        Flasher::setFlash("Berhasil", "Mendaftar", "success");
                        header('Location: ' . BASEURL . '/home');
                    } else {
                        Flasher::setFlash("Gagal", "Mendaftar", "danger");
                        header('Location: ' . BASEURL . '/home');
                    }
                }
            }
        }
    }

    public function formLomba()
    {
        if (!isset($_SESSION['username'])) {
            Flasher::setFlash("Perhatian", "Silahkan login sebelum daftar", "danger");
            header('Location: ' . BASEURL . '/user/login');
        } else {
            if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                Flasher::setFlash("Perhatian", "Anda telah terdaftar di event ini", "danger");
                header('Location: ' . BASEURL . '/home');
            } else {
                if (!isset($_POST['eid'])) {
                    header('Location: ' . BASEURL . '/home');
                } else {
                    $data['event'] = $this->model('Event_model')->getEvent($_POST);
                    $this->view('templates/header', $data);
                    $this->view('event/formLomba', $data);
                    $this->view('templates/footer');
                }
            }
        }
    }
}
