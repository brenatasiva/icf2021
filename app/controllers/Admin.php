<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Peserta";
        $data['listAllUser'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header_admin', $data);
        $this->view('admin/peserta', $data);
        $this->view('templates/footer');
    }

    // Event Methods

    private function templates($view, $data)
    {
        $this->view('templates/header_admin', $data);
        $this->view($view, $data);
        $this->view('templates/footer');
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
        $this->view('templates/footer');
    }

    public function detil($idEvent)
    {
        $id['eid'] = $idEvent;
        $detilEvent = $this->model('Event_model')->getEvent($id);
        $detilPesertaPerEvent = $this->model('User_model')->getPendaftarByEvent($idEvent);
        $judul = $detilEvent['nama'];

        $data = [
            'judulHalaman' => $judul,
            'detilEvent' => $detilEvent,
            'detilPeserta' => $detilPesertaPerEvent
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
        if ($this->model('Event_model')->insertEvent($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/event');
        }
        die(var_dump($_POST));
    }

    public function updateEvent()
    {
        if ($this->model('Event_model')->updateEvent($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/event');
        }
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
        $this->view('templates/footer');
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
}
