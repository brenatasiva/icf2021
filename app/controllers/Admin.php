<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = "Admin";
        $data['listAllUser'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
}
