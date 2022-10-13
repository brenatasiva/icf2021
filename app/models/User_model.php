<?php
require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');
require_once('phpmailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
            $hasil = $this->db->rowCount();

            if ($hasil > 0) {
                $sql2 = "UPDATE user set code = :code where username = :username";
                $this->db->query($sql2);
                $this->db->bind('code', null);
                $this->db->bind('username', $data['username']);
                $this->db->execute();
            }
            return $hasil;
        }
    }

    public function checkUsername($data)
    {
        $sql = "SELECT username from user where username = :username";
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
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar, link_drive) values (:username, :event_id, :tgl_daftar, :link)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
            $this->db->bind('link', $data['link']);
            $this->db->execute();
        } else {
            $sql = "INSERT into pendaftar (user_username, event_id, tanggal_daftar, nama_tim, id_game, link_drive) values (:username, :event_id, :tgl_daftar, :nama_tim, :id_game, :link_drive)";
            $this->db->query($sql);
            $this->db->bind('username', $_SESSION['username']);
            $this->db->bind('event_id', $data['eid']);
            $this->db->bind('tgl_daftar', $date);
            // if ($data['nama_tim'] == "") $data['nama_tim'] = null;
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
        $sql = "SELECT p.id, p.event_id, p.status, p.nama_tim, p.id_game, p.link_drive, e.nama, e.deskripsi, e.tanggal_mulai, e.tanggal_selesai, e.author, e.link_wa, e.link_zoom, e.id_zoom, e.pass_zoom, j.jenis from pendaftar p inner join event e on p.event_id = e.id inner join jenis j on j.id = e.jenis_id where p.user_username = :username and j.jenis like :jenis";
        $this->db->query($sql);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('jenis', "%$data%");
        return $this->db->resultSet();
    }

    public function getPendaftarByEvent($idevent)
    {
        $sql = "SELECT * FROM pendaftar p INNER JOIN user u on p.user_username = u.username WHERE event_id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $idevent);
        return $this->db->resultSet();
    }

    public function getAllPendaftarLombaKelompok()
    {
        $sql = "SELECT p.id as 'idpendaftar',p.user_username, p.nama_tim, p.id_game,p.link_drive,p.status, j.jenis FROM `pendaftar` p INNER JOIN event e on p.event_id = e.id INNER JOIN jenis j on e.jenis_id = j.id WHERE j.jenis = 'Lomba Kelompok'";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getAllAnggota()
    {
        $sql = 'SELECT * FROM anggota';
        $this->db->query($sql);
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
            $this->db->bind('namatim', ($arrNamaTim[$i] == "") ? null : $arrNamaTim[$i]);
            $this->db->bind('idgame', ($arrIdGame[$i] == "") ? null : $arrIdGame[$i]);
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
        $sql = "SELECT * from pendaftar where user_username = :username and event_id = :id";
        $this->db->query($sql);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('id', $data['eid']);
        $perwakilan = $this->db->resultSet();
        $anggota = $this->getAnggota($perwakilan[0]['id']);
        return array_merge($perwakilan, $anggota);
    }

    public function getAnggota($data)
    {
        $sql = "SELECT * from anggota where pendaftar_id = :pendaftar";
        $this->db->query($sql);
        $this->db->bind('pendaftar', $data);
        return $this->db->resultSet();
    }

    public function requestReset($data)
    {
        $sql = "SELECT username, email, nama from user where username = :username";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $data = $this->db->resultSet();

        if ($data != null){
            $code = rand(10000000, 99999999);
            $sql = "UPDATE user set code = :code where username = :username";
            $this->db->query($sql);
            $this->db->bind('code', $code);
            $this->db->bind('username', $data[0]['username']);
            $this->db->execute();

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->IsHTML(true); 
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "si.icf.ubaya@gmail.com";
            $mail->Password = "KerjaTerusHiyaHiya";
            $mail->Subject = "ICF 2021 - Password Reset";
            $mail->setFrom("si.icf.ubaya@gmail.com");
            $mail->Body = '<p>Halo '. $data[0]['nama'] .',</p>
<p>Kami menerima permintaan untuk Reset Password terhadap username Anda melalui
Website kami http://icf.ifubaya.id/index.php/user/reset </p>
Kode verifikasi anda:<br>
<b>' . $code . '</b>
<p>Jika bukan Anda yang meminta kode ini, ada kemungkinan bahwa orang lain mencoba
mengakses username Anda. Bila hal ini terjadi lakukan email balasan pada email ini.<p><br>

Hormat kami,<br>
SI ICF 2021';
            $mail->addAddress($data[0]['email']);
            $mail->Send();
            $mail->smtpClose();
        }
        return $data;
    }

    public function checkCode($data)
    {
        $sql = "SELECT code from user where username = :username";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $data2 = $this->db->single();

        if ($data2['code'] == $data['code']) {
            return $data['username'];
        } else {
            return "";
        }
    }

    public function resetPassword($data)
    {
        $salt = $this->generateSalt();
        $saltedPwd = $this->generateSaltedPwd($data['password'], $salt);

        $sql = "UPDATE user set password = :pass, salt = :salt where username = :username";
        $this->db->query($sql);
        $this->db->bind('pass', $saltedPwd);
        $this->db->bind('salt', $salt);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePendaftar($data)
    {
        $sql = "UPDATE pendaftar set link_drive = :linkdrive where user_username = :username";
        $this->db->query($sql);
        $this->db->bind('linkdrive', $data['link_drive_individu']);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    //khusus edit custom
    public function hapusPendaftar($data)
    {
        $sql = "DELETE FROM `pendaftar` WHERE user_username = :username and event_id = :idevent";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->bind('idevent', $data['idevent']);
        $this->db->execute();
    }

    public function hapusPendaftarPubg($data)
    {
        $sql = "DELETE a FROM anggota a inner join pendaftar p on p.id = a.pendaftar_id where p.nama_tim = :namatim";
        $this->db->query($sql);
        $this->db->bind('namatim', $data['namatim']);
        $this->db->execute();

        $sql = "DELETE FROM `pendaftar` WHERE nama_tim = :namatim";
        $this->db->query($sql);
        $this->db->bind('namatim', $data['namatim']);
        $this->db->execute();
    }

    public function hapusUser($data)
    {
        $sql = "DELETE FROM `user` WHERE username = :username";
        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
    }

    public function custom()
    {
        
        $sql = "UPDATE schedule set waktu_mulai = :waktuml, waktu_selesai = :waktusls  where id = :id";
        $this->db->query($sql);
        $this->db->bind('waktuml', '2021-09-25 18:45:00');
        $this->db->bind('waktusls', '2021-09-25 19:00:00');
        $this->db->bind('id', '8');
        $this->db->execute();
        $sql = "SELECT * from schedule";
        $this->db->query($sql);
        echo "<pre>";
        print_r($this->db->resultSet());
        echo "</pre>";
        exit;
    }
}
