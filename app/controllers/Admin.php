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

    public function event()
    {
        $data['judulHalaman'] = "Event";
        $data['listAllEvent'] = $this->model('Event_model')->getAllEvent();
        $this->view('templates/header_admin', $data);
        $this->view('admin/event', $data);
        $this->view('templates/footer');
    }

    public function faq()
    {
        $data['judulHalaman'] = 'FAQ';
        $data['listAllFaq'] = $this->model('Faq_model')->getAllFaq();
        $this->view('templates/header_admin', $data);
        $this->view('admin/faq', $data);
        $this->view('templates/footer');
    }
}
