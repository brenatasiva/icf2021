<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Admin";
        $data['listAllUser'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header_admin', $data);
        $this->view('admin/peserta', $data);
        $this->view('templates/footer');
    }

    public function event()
    {
        # code...
    }
}
