<?php

class Login extends Controller
{
    public function index()
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
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        $data['judulHalaman'] = "Home";
        header('location: ' . BASEURL);
    }
}
