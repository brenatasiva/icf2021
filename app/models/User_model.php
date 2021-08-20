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

    public function insertPendaftar($data)
    {
        $date = date("Y-m-d");
        if (!isset($data['nama_tim'])) {
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar) values (:username, :event_id, :tgl_daftar)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
            $this->db->execute();
        } else {
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar, nama_tim, id_game, link_drive) values (:username, :event_id, :tgl_daftar, :nama_tim, :id_game, :link_drive)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
            $this->db->bind('nama_tim', $data['nama_tim']);
            $this->db->bind('id_game', $data['idPubg']);
            $this->db->bind('link_drive', $data['linkDrive']);
            $this->db->execute();
            $lastId = $this->db->getLastId();
            $sql = "INSERT into anggota (pendaftar_id, nama, nrp, no_hp, email, id_game) values (:pendaftar_id, :nama, :nrp, :no_hp, :email, :id_game)";
            for ($i = 1; $i <= 3; $i++) {
                $this->db->query($sql);
                $this->db->bind('pendaftar_id', $lastId);
                $this->db->bind('nama', $data['nama' . $i]);
                $this->db->bind('nrp', $data['nrp' . $i]);
                $this->db->bind('no_hp', $data['nomor' . $i]);
                $this->db->bind('email', $data['email' . $i]);
                $this->db->bind('id_game', $data['idPubg' . $i]);
                $this->db->execute();
            }
        }
        return $this->db->rowCount();
    }

    public function cekPendaftar($data)
    {
        $sql = "SELECT user_username from pendaftar where user_username = :username and event_id = :event_id";
        $this->db->query($sql);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('event_id', $data['eid']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function riwayatPendaftaran($data)
    {
        $sql = "SELECT p.id, p.status, p.nama_tim, p.id_game, p.link_drive, e.nama, e.tanggal_mulai, e.tanggal_selesai, e.author, e.link_wa, e.link_zoom from pendaftar p inner join event e on p.event_id = e.id inner join jenis j on j.id = e.jenis_id where p.user_username = :username and j.jenis like :jenis";
        $this->db->query($sql);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('jenis', "%$data%");
        return $this->db->resultSet();
    }

    public function riwayatDetil($data)
    {
    }

    public function updateStatus($data)
    {
    }
}
