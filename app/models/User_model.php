<?php
class User_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $sql = "SELECT * from user;";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function validateUser($data)
    {
        $sql = "SELECT * from user where username = :username and password = :pass";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', $data['pass']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function checkUsername($data)
    {
        $sql = "SELECT ('username') from user where username = :username";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function insertUser($data)
    {
        $sql = "INSERT into user (username, password, nama, email, no_hp, nrp) values(:username, :pass, :nama, :email, :no_hp, :nrp)";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function insertPendaftaran($data)
    {
        $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar, bukti_pembayaran, nama_tim) values (:username, :event_id, :tgl_daftar: bukti_pembayaran, nama_tim)";
        $this->db->query($sql);
        $this->db->bind('user_username', $data['username']);
        $this->db->bind('event_id', $data['event_id']);
        $this->db->bind('tanggal_daftar', $data['tgl_daftar']);
        $this->db->bind('bukti_pembayaran', $data['bukti_pembayaran']);
        $this->db->bind('nama_tim', $data['nama_tim']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStatus($data)
    {
    }
}
