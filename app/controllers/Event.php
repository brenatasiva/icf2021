  <?php

    class Event extends Controller
    {
        public function index($category = null)
        {
            $data['listAllEvent'] = $this->model('Event_model')->getEventPerCategory($category);
            if ($category === "seminar") {
                if (isset($_SESSION['username']))
                    $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran($category);
                $data['judulHalaman'] = "Seminar";
            } else if ($category === "lomba") {
                if (isset($_SESSION['username']))
                    $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran($category);
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
                Flasher::setFlash("Information", "Please login first, before you register this event", "primary");
                header('Location: ' . BASEURL . '/user/login');
            } else {
                if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                    Flasher::setFlash("Error", "You already have been registered for this event", "danger");
                    header('Location: ' . BASEURL . '/home');
                } else {
                    if ($_POST['eid'] == null) {
                        header('Location: ' . BASEURL . '/home');
                    } else {
                        if ($this->model('User_model')->insertPendaftar($_POST) > 0) {
                            Flasher::setFlash("Success", "Registration success", "success");
                            header('Location: ' . BASEURL . '/home');
                        } else {
                            Flasher::setFlash("Error", "Registratin failed", "danger");
                            header('Location: ' . BASEURL . '/home');
                        }
                    }
                }
            }
        }

        public function formLomba()
        {
            if (!isset($_SESSION['username'])) {
                Flasher::setFlash("Information", "Please login first, before you register this event", "primary");
                header('Location: ' . BASEURL . '/user/login');
            } else {
                if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                    Flasher::setFlash("Error", "You already have been registered for this event", "danger");
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
