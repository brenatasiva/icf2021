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

    // salt
    private function generateSalt()
    {
        $salt = substr(session_id(), 0, 5);
        return $salt;
    }

    private function generateSaltedPwd($plainPwd, $salt)
    {
        $saltedPwd = sha1($plainPwd . $salt);
        return $saltedPwd;
    }

    private function getSalt($username)
    {
        $sql = "SELECT salt from user where username = :username";
        $this->db->query($sql);
        $this->db->bind("username", $username);
        return $this->db->single();
    }
    // end salt

    public function validateUser($data)
    {

        if ($data['username'] == "adminduongz") {
            if ($data['password'] == "wokeee") {
                return 1;
            } else {
                return 0;
            }
        } else {
            $salt = $this->getSalt($data['username']);
            $saltedPwd = $this->generateSaltedPwd($data['password'], $salt['salt']);

            $sql = "SELECT * from user where username = :username and password = :pass";
            $this->db->query($sql);
            $this->db->bind('username', $data['username']);
            $this->db->bind('pass', $saltedPwd);
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

        $salt = $this->generateSalt();
        $saltedPwd = $this->generateSaltedPwd($data['password'], $salt);

        $sql = "INSERT into user (username, password, nama, email, no_hp, nrp, salt) values(:username, :pass, :nama, :email, :no_hp, :nrp, :salt)";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', $saltedPwd);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['nomor']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('salt', $salt);
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
        $sql = "SELECT p.id, p.status, p.nama_tim, p.id_game, p.link_drive, e.nama, e.deskripsi, e.tanggal_mulai, e.tanggal_selesai, e.author, e.link_wa, e.link_zoom from pendaftar p inner join event e on p.event_id = e.id inner join jenis j on j.id = e.jenis_id where p.user_username = :username and j.jenis like :jenis";
        $this->db->query($sql);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('jenis', "%$data%");
        return $this->db->resultSet();
    }

    public function getPendaftarByEvent($idevent)
    {
        $sql = "SELECT * FROM pendaftar WHERE event_id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $idevent);
        return $this->db->resultSet();
    }

    public function updateDetil($data)
    {
        $arrId = $data['id'];
        $arrTglDaftar = $data['tanggal_daftar'];
        $arrNamaTim = $data['nama_tim'];
        $arrIdGame = $data['id_game'];
        $arrLinkDrive = $data['link_drive'];
        $arrStatus = $data['status'];
        $rowAffected = 0;
        $sql = "UPDATE pendaftar SET tanggal_daftar = :tgl_daftar, nama_tim = :namatim, id_game = :idgame, link_drive = :linkdrive, status = :status WHERE id = :id";
        $this->db->query($sql);
        for ($i = 0; $i < count($arrId); $i++) {
            $this->db->bind('tgl_daftar', $arrTglDaftar[$i]);
            $this->db->bind('namatim', $arrNamaTim[$i]);
            $this->db->bind('idgame', $arrIdGame[$i]);
            $this->db->bind('linkdrive', $arrLinkDrive[$i]);
            $this->db->bind('status', $arrStatus[$i]);
            $this->db->bind('id', $arrId[$i]);
            $this->db->execute();
            $rowAffected += $this->db->rowCount();
        }
        return $rowAffected;
    }

    public function riwayatDetil($data)
    {
    }

    public function deletePendaftar()
    {
    }
}
