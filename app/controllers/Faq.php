<?php

class Faq extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'FAQ - ICF 2021';
        $data['listAllFaq'] = $this->model('Faq_model')->getAllFaq();
        $this->view('templates/header', $data);
        $this->view('faq/index', $data);
        $this->view('templates/footer');
    }
}
