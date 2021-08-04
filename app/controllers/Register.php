<?php

class Register extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Register";

        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function registUser()
    {
        if (isset($_POST['btnsubmit'])) {
            if (!isset($_POST['username']) || $_POST['username'] == "") {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if (!isset($_POST['password']) || $_POST['password'] == "") {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if (!isset($_POST['nama']) || $_POST['nama'] == "") {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if (!isset($_POST['email']) || $_POST['email'] == "") {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if (!isset($_POST['nomor'])) {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if (!isset($_POST['nrp']) || strlen($_POST['nrp']) > 10) {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
            if ($this->model('User_model')->insertUser($_POST) > 0) {
                Flasher::setFlash('berhasil', 'terdaftar', 'success');
                header('Location: ' . BASEURL . '/register/');
            } else {
                Flasher::setFlash('gagal', 'terdaftar', 'danger');
                header('Location: ' . BASEURL . '/register/');
            }
        } else {
            header('Location: ' . BASEURL . '/register');
        }
    }
}
