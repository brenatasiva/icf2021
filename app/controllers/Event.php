  <?php

    class Event extends Controller
    {
        public function index($category = null)
        {
            $data['listAllEvent'] = $this->model('Event_model')->getEventPerCategory($category);
            if ($category === "seminar") {
                if (isset($_SESSION['username']))
                    $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran($category);
                $data['judulHalaman'] = "Seminar - ICF 2021";
            } else if ($category === "lomba") {
                Flasher::setFlash("Information", "Pendaftaran lomba dilakukan oleh satu perwakilan saja", "primary");
                if (isset($_SESSION['username']))
                    $data['listRiwayat'] = $this->model('User_model')->riwayatPendaftaran($category);
                $data['judulHalaman'] = "Lomba - ICF 2021";
            } else if ($category === "pameran") {
                $data['judulHalaman'] = "Pameran - ICF 2021";
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
                Flasher::setFlash("Information", "Please login first before you register to this event", "primary");
                header('Location: ' . BASEURL . '/user/login');
            } else {
                if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                    Flasher::setFlash("Error", "You have already registered for this event", "danger");
                    header('Location: ' . BASEURL);
                } else {
                    if ($_POST['eid'] == null) {
                        Flasher::setFlash("Error", "Event not found", "danger");
                        header('Location: ' . BASEURL);
                    } else {
                        if ($this->model('User_model')->insertPendaftar($_POST) > 0) {
                            Flasher::setFlash("Success", "Registration succeeded", "success");
                            header('Location: ' . BASEURL);
                        } else {
                            Flasher::setFlash("Error", "Registation failed", "danger");
                            header('Location: ' . BASEURL);
                        }
                    }
                }
            }
        }

        public function formLomba()
        {
            if (!isset($_SESSION['username'])) {
                Flasher::setFlash("Information", "Please login first before you register to this event", "primary");
                header('Location: ' . BASEURL . '/user/login');
            } else {
                if ($this->model('User_model')->cekPendaftar($_POST) > 0) {
                    Flasher::setFlash("Error", "You have already registered for this event", "danger");
                    header('Location: ' . BASEURL);
                } else {
                    if (!isset($_POST['eid'])) {
                        header('Location: ' . BASEURL);
                    } else {
                        $data = $this->model('Event_model')->getEvent($_POST);
                        $data['judulHalaman'] = $data['event']['jenis'] . " - ICF 2021";
                        $this->view('templates/header', $data);
                        $this->view('event/formLomba', $data);
                        $this->view('templates/footer');
                    }
                }
            }
        }
    }
