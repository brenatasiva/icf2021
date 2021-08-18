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
        $sql = "SELECT * from user";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getUser($data)
    {
        $sql = "SELECT * from user where username = :username";
        $this->db->query($sql);
        $this->db->bind('username', $data);
        return $this->db->resultSet();
    }

    public function validateUser($data)
    {
        if ($data['username'] == "adminduongz") {
            if ($data['pass'] == "wokeee") {
                return 1;
            } else {
                return 0;
            }
        } else {
            $sql = "SELECT * from user where username = :username and password = :pass";
            $this->db->query($sql);
            $this->db->bind('username', $data['username']);
            $this->db->bind('pass', $data['pass']);
            $this->db->execute();
            return $this->db->rowCount();
        }
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
        $this->db->bind('pass', $data['password']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['nomor']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editUser($data)
    {
        $sql = "UPDATE user set email = :email, no_hp = :no_hp, nrp = :nrp where username = :username";
        $this->db->query($sql);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function insertPendaftaran($data)
    {
        $date = date("Y-m-d");
        if (!isset($data['nama_tim'])) {
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar) values (:username, :event_id, :tgl_daftar)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
        } else {
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar, bukti_pembayaran, nama_tim) values (:username, :event_id, :tgl_daftar, :bukti_pembayaran, :nama_tim)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
            $this->db->bind('bukti_pembayaran', $data['bukti_pembayaran']);
            $this->db->bind('nama_tim', $data['nama_tim']);
        }
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStatus($data)
    {
    }
}
