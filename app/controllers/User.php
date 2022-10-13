<?php

class User extends Controller
{
    public function __construct()
    {
        if ($_SESSION['xyz'] != "abudabi") {
            header('location: ' . BASEURL);
        }
    }

    public function index()
    {
        header('Location: ' . BASEURL);
    }

    public function profile()
    {
        $data['judulHalaman'] = "Profile - ICF 2021";
        $data['User'] = $this->model('User_model')->getUser($_SESSION['username']);
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
    }

    public function editProfile()
    {
        $data['judulHalaman'] = "Profile - ICF 2021";
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
        if (isset($_SESSION['username'])) {
            header('location: ' . BASEURL);
        } else {
            $data['judulHalaman'] = "Login - ICF 2021";

            $this->view('templates/header', $data);
            $this->view('login/index', $data);
        }
    }

    public function cekLogin()
    {
        if ($this->model('User_model')->validateUser($_POST) > 0) {
            $_SESSION['username'] = $_POST['username'];
            if ($_POST['username'] == "adminduongz") {
                $data['judulHalaman'] = "Admin - ICF 2021";
                header('location: ' . BASEURL . '/admin');
            } else {
                $data['judulHalaman'] = "ICF 2021";
                header('location: ' . BASEURL);
            }
        } else {
            Flasher::setFlash("Error", "Login failed", "danger");
            $data['judulHalaman'] = "Login - ICF 2021";
            header('location: ' . BASEURL . '/user/login');
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        $data['judulHalaman'] = "ICF 2021";
        header('location: ' . BASEURL . '/user/login');
    }

    public function register()
    {
        if (isset($_SESSION['username'])) {
            header('location: ' . BASEURL);
        } else {
            $data['judulHalaman'] = "Register - ICF 2021";

            $this->view('templates/header', $data);
            $this->view('register/index', $data);
        }
    }

    public function registUser()
    {
        if (isset($_POST['btnsubmit'])) {
            if ($this->model('User_model')->checkUsername($_POST) == 0 && $_POST['username'] != 'admindongz') {
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
                } else if (strlen($_POST['nrp']) > 9) {
                    Flasher::setFlash('gagal', 'terdaftar', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                } else if ($this->model('User_model')->insertUser($_POST) > 0) {
                    Flasher::setFlash('Success', 'Registration succeeded', 'success');
                    header('Location: ' . BASEURL . '/user/login');
                } else {
                    Flasher::setFlash('Error', 'Registration failed', 'danger');
                    header('Location: ' . BASEURL . '/user/register');
                }
            } else {
                Flasher::setFlash('Error', 'Username already exist', 'danger');
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
        $hasil = $this->model('User_model')->requestReset($_POST);
        
        if ($hasil == null) {
            Flasher::setFlash('Error', 'Username does not exist', 'danger');
            header('Location: ' . BASEURL . '/user/login');
        } else {
            Flasher::setFlash('Information', 'Please check your email: <u><b>' . $hasil[0]['email'] . '</b></u> for confirmation code', 'warning');
            header('Location: ' . BASEURL . '/user/reset');
        } 
    }

    public function reset()
    {
        $data['judulHalaman'] = "Reset Password - ICF 2021";
        $this->view('templates/header', $data);
        $this->view('login/resetPassword', $data);
    }

    public function resetPassword()
    {
        if (!isset($_POST['username']) || $_POST['username'] == "") {
            Flasher::setFlash('Failed', 'Please insert username', 'danger');
            header('Location: ' . BASEURL . '/user/reset');
        } else if (!isset($_POST['code']) || $_POST['code'] == "") {
            Flasher::setFlash('Failed', 'Please insert code', 'danger');
            header('Location: ' . BASEURL . '/user/reset');
        } else if (!isset($_POST['password']) || $_POST['password'] == "") {
            Flasher::setFlash('Failed', 'Please insert new password', 'danger');
            header('Location: ' . BASEURL . '/user/reset');
        } elseif (!isset($_POST['repassword']) || $_POST['repassword'] == "") {
            Flasher::setFlash('Failed', 'Please insert re-password', 'danger');
            header('Location: ' . BASEURL . '/user/reset');
        } else if ($_POST['password'] != $_POST['repassword']) {
            Flasher::setFlash('Failed', 'Password and re-password are not the same', 'danger');
            header('Location: ' . BASEURL . '/user/reset');
        } else {
            $checkUsername = $this->model('User_model')->checkUsername($_POST);
            $checkCode = $this->model('User_model')->checkCode($_POST);

            if ($checkUsername <= 0) {
                Flasher::setFlash('Failed', 'Username not found', 'danger');
                header('Location: ' . BASEURL . '/user/reset');
            } else if ($checkCode == "") {
                Flasher::setFlash('Failed', 'Code does not match', 'danger');
                header('Location: ' . BASEURL . '/user/reset');
            } else {
                if ($this->model('User_model')->resetPassword($_POST) > 0) {
                    Flasher::setFlash('Success', 'Reset password succeeded', 'success');
                    header('Location: ' . BASEURL . '/user/login');
                } else {
                    Flasher::setFlash('Failed', 'Reset password failed', 'danger');
                    header('Location: ' . BASEURL . '/user/login');
                }
            }
        }
    }
}
