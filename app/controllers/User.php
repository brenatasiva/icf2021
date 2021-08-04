<?php

class User extends Controller
{
    public function admin()
    {
        $data['judulHalaman'] = "Admin";
        $data['listAllUser'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
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
            Flasher::setFlash("Berhasil", "Edit Profile", "Ijo bg-success");
        else
            Flasher::setFlash("Gagal", "Edit Profile", "Merah bg-danger");
        $data['User'] = $this->model('User_model')->getUser($_SESSION['username']);
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function Login()
    {
        $data['judulHalaman'] = "Login";

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function cekLogin()
    {
        if ($this->model('User_model')->validateUser($_POST) > 0) {
            $_SESSION['username'] = $_POST['username'];
            if ($_POST['username'] == "admindong") {
                $data['judulHalaman'] = "Admin";
                header('location: ' . BASEURL . '/admin');
            } else {
                $data['judulHalaman'] = "Home";
                header('location: ' . BASEURL);
            }
        } else {
            Flasher::setFlash("Gagal", "Login", "Merah bg-danger");
            $data['judulHalaman'] = "Login";
            $this->view('templates/header', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer');
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
        $this->view('templates/footer');
    }
}
