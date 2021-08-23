<?php

class User extends Controller
{
    public function index()
    {
        header('Location: ' . BASEURL);
    }

    public function profile()
    {
        $data['judulHalaman'] = "Profile";
        $data['User'] = $this->model('User_model')->getUser($_SESSION['username']);
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function editProfile()
    {
        $data['judulHalaman'] = "Profile";
        if ($this->model('User_model')->editUser($_POST) > 0)
            Flasher::setFlash("Berhasil", "Edit Profile", "success");
        else if ($this->model('User_model')->editUser($_POST) == 0)
            Flasher::setFlash("Pemberitahuan", "Tidak ada data yang diupdate", "success");
        else
            Flasher::setFlash("Gagal", "Edit Profile", "danger");
        $data['User'] = $this->model('User_model')->getUser($_SESSION['username']);
        header('location: ' . BASEURL . '/user/profile');
    }

    public function Login()
    {
        $data['judulHalaman'] = "Login";

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
    }

    public function cekLogin()
    {
        if ($this->model('User_model')->validateUser($_POST) > 0) {
            $_SESSION['username'] = $_POST['username'];
            if ($_POST['username'] == "adminduongz") {
                $data['judulHalaman'] = "Admin";
                header('location: ' . BASEURL . '/admin');
            } else {
                $data['judulHalaman'] = "Home";
                header('location: ' . BASEURL);
            }
        } else {
            Flasher::setFlash("Gagal", "Login", "danger");
            $data['judulHalaman'] = "Login";
            header('location: ' . BASEURL . '/user/login');
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        $data['judulHalaman'] = "Home";
        header('location: ' . BASEURL);
    }

    public function register()
    {
        $data['judulHalaman'] = "Register";

        $this->view('templates/header', $data);
        $this->view('register/index', $data);
    }

    public function registUser()
    {
        if (isset($_POST['btnsubmit'])) {
            if (!isset($_POST['username']) || $_POST['username'] == "") {
                Flasher::setFlash('gagal', 'terdaftar1', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if (!isset($_POST['password']) || $_POST['password'] == "") {
                Flasher::setFlash('gagal', 'terdaftar2', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if (!isset($_POST['nama']) || $_POST['nama'] == "") {
                Flasher::setFlash('gagal', 'terdaftar3', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if (!isset($_POST['email']) || $_POST['email'] == "") {
                Flasher::setFlash('gagal', 'terdaftar4', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if (!isset($_POST['nomor'])) {
                Flasher::setFlash('gagal', 'terdaftar5', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if (!isset($_POST['nrp']) || strlen($_POST['nrp']) > 10) {
                Flasher::setFlash('gagal', 'terdaftar6', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            } else if ($this->model('User_model')->insertUser($_POST) > 0) {
                Flasher::setFlash('berhasil', 'terdaftar7', 'success');
                header('Location: ' . BASEURL . '/user/register');
            } else {
                Flasher::setFlash('gagal', 'terdaftar8', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            }
        } else {
            header('Location: ' . BASEURL . '/user/register');
        }
    }
}
