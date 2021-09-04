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
    }

    public function editProfile()
    {
        $data['judulHalaman'] = "Profile";
        if ($this->model('User_model')->editUser($_POST) > 0)
            Flasher::setFlash("Success", "Your profile has been updated", "success");
        else if ($this->model('User_model')->editUser($_POST) == 0)
            Flasher::setFlash("Information", "No data updated", "primary");
        else
            Flasher::setFlash("Error", "Failed to update data", "danger");
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
            Flasher::setFlash("Error", "Login failed", "danger");
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
            if ($this->model('User_model')->checkUsername($_POST) == 0) {
                if (!isset($_POST['username']) || $_POST['username'] == "") {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                } else if (!isset($_POST['password']) || $_POST['password'] == "") {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                } else if (!isset($_POST['nama']) || $_POST['nama'] == "") {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                } else if (!isset($_POST['email']) || $_POST['email'] == "") {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                } else if (!isset($_POST['nomor'])) {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                    // } else if (!isset($_POST['nrp']) || strlen($_POST['nrp']) > 10) {
                    //     Flasher::setFlash('gagal', 'terdaftar', 'danger');
                    //     header('Location: ' . BASEURL . '/user/register');
                } else if ($this->model('User_model')->insertUser($_POST) > 0) {
                    Flasher::setFlash('Success', 'Registration success', 'success');
                    header('Location: ' . BASEURL . '/user/register');
                } else {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                }
            } else {
                Flasher::setFlash('Error', 'Username already exists', 'danger');
                header('Location: ' . BASEURL . '/user/register');
            }
        } else {
            header('Location: ' . BASEURL . '/user/register');
        }
    }

    public function getDetilRiwayat()
    {
        echo json_encode($this->model('User_model')->riwayatDetil($_POST));
    }

    public function requestReset()
    {
        echo json_encode($this->model('User_model')->requestReset($_POST));
    }

    public function reset()
    {
        if ($_POST['username'] != "" && $_POST['code'] != "") {
            $res = $this->model('User_model')->checkCode($_POST);
            if ($res != "") {
                $data['judulHalaman'] = "Reset Password";
                $data['username'] = $res;
                $this->view('templates/header', $data);
                $this->view('login/resetPassword', $data);
            }
        }
    }

    public function resetPassword()
    {
        if ($_POST['password'] == $_POST['repassword']) {
            if ($this->model('User_model')->resetPassword($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'Password berhasil direset, silahkan login', 'success');
                header('Location: ' . BASEURL . '/user/login');
            } else {
                Flasher::setFlash('Gagal', 'Password gagal direset, silahkan ulangi', 'danger');
                header('Location: ' . BASEURL . '/user/login');
            }
        } else {
            Flasher::setFlash('Error', 'Password tidak sama', 'danger');
        }
    }
}
