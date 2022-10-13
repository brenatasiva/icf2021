<?php

class Admin extends Controller
{
    public function __construct()
    {
        if ($_SESSION['username'] != "adminduongz") {
            header('location: ' . BASEURL);
        }
    }

    public function index()
    {
        $data['judulHalaman'] = "Peserta";
        $data['listAllUser'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header_admin', $data);
        $this->view('admin/peserta', $data);
    }

    // Event Methods

    private function templates($view, $data)
    {
        $this->view('templates/header_admin', $data);
        $this->view($view, $data);
    }
    public function getJenisEvent()
    {
        echo json_encode($this->model('Event_model')->getJenisEvent());
    }

    public function event()
    {
        $data['judulHalaman'] = "Event";
        $data['listAllEvent'] = $this->model('Event_model')->getAllEvent();
        $this->view('templates/header_admin', $data);
        $this->view('admin/event', $data);
    }

    public function detil($idEvent)
    {
        $id['eid'] = $idEvent;
        $detilEvent = $this->model('Event_model')->getEvent($id);
        $detilPesertaPerEvent = $this->model('User_model')->getPendaftarByEvent($idEvent);
        $allPerwakilanLombaKelompok = $this->model('User_model')->getAllPendaftarLombaKelompok();
        $allAnggota = $this->model('User_model')->getAllAnggota();
        $judul = $detilEvent['event']['nama'];
        $data = [
            'judulHalaman' => $judul,
            'detilEvent' => $detilEvent['event'],
            'detilPeserta' => $detilPesertaPerEvent,
            'allPerwakilanLombaKelompok' => $allPerwakilanLombaKelompok,
            'allAnggota' => $allAnggota
        ];
        $this->templates('admin/detilEvent', $data);
    }

    public function updateDetil()
    {
        if ($this->model('User_model')->updateDetil($_POST) >= 0) {
            header('Location: ' . BASEURL . '/admin/detil/' . $_POST['idevent']);
            $_SESSION['updatedDetil'] = 'Updated';
        }
    }

    public function tambahEvent()
    {
        // die(var_dump($_FILES));
        if ($this->model('Event_model')->insertEvent($_POST, $_FILES) > 0) {
            header('Location: ' . BASEURL . '/admin/event');
        }
        die(var_dump($_POST));
    }

    public function updateEvent()
    {
        // var_dump($_FILES);
        // die(var_dump($_POST));
        if ($this->model('Event_model')->updateEvent($_POST, $_FILES) >= 0) {
            header('Location: ' . BASEURL . '/admin/event');
        }
        var_dump($_FILES);
        die(var_dump($_POST));
    }

    public function deleteEvent()
    {
        if ($this->model('Event_model')->deleteEvent($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/event');
        }
        die(var_dump($_POST));
    }
    public function getEvent()
    {
        echo json_encode($this->model('Event_model')->getEvent($_POST));
    }

    // End Event Methods
    // FAQ Methods

    public function faq()
    {
        $data['judulHalaman'] = 'FAQ';
        $data['listAllFaq'] = $this->model('Faq_model')->getAllFaq();
        $this->view('templates/header_admin', $data);
        $this->view('admin/faq', $data);
    }

    public function tambahFaq()
    {
        if ($this->model('Faq_model')->insertFaq($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/faq');
        }
    }

    public function editFaq()
    {
        if ($this->model('Faq_model')->updateFaq($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/faq');
        }
    }

    public function deleteFaq()
    {
        if ($this->model('Faq_model')->deleteFaq($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/faq');
        }
        die(var_dump($_POST));
    }

    public function getFaqById()
    {
        echo json_encode($this->model('Faq_model')->getFaqById($_POST));
    }

    public function editCustom()
    {
        $data['judulHalaman'] = "Edit Custom";
        $this->view('templates/header_admin', $data);
        $this->view('admin/editCustom', $data);
    }

    public function editCustomGo($data)
    {
        if ($data == "eventbiasa") {
            $this->model('User_model')->hapusPendaftar($_POST);
        } else {
        }
        header('Location: ' . BASEURL . '/admin/editcustom');
    }
}
