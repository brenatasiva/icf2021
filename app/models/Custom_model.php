<?php
class Custom_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSchedule()
    {
        $sql = "SELECT * FROM schedule";
        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function getSchedule($icf_date)
    {
        $sql = "SELECT * FROM schedule WHERE DAY(waktu_mulai) = DAY(:icfdate)";
        $this->db->query($sql);
        $this->db->bind('icfdate', $icf_date);

        return $this->db->resultSet();
    }

    public function getCurrentSchedule()
    {
        date_default_timezone_set('Asia/Jakarta');
        $dateTime = new DateTime();
        $now = $dateTime->format('Y-m-d H:i');

        $sql = "SELECT * FROM schedule 
            WHERE DAY(waktu_mulai) = DAY('$now') AND 
            TIME(waktu_mulai) <=  TIME('$now') AND 
            TIME(waktu_selesai) >=  TIME('$now')";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function insertSchedule()
    {
        // $sql = "INSERT INTO schedule (waktu_mulai, waktu_selesai, kegiatan) VALUES 
        // ('2021-09-25 10:00', '2021-09-25 10:15', 'Opening'),
        // ('2021-09-25 10:15', '2021-09-25 11:45', 'Seminar Dive Into Another World: Anytime, Anywhere, on Your Fingertips <br> ( Pembicara : Marcellinus Ferdinand Suciadi, S.T., M.Comp. )'),
        // ('2021-09-25 11:45', '2021-09-25 13:00', 'ISHOMA'),
        // ('2021-09-25 13:00', '2021-09-25 14:00', 'Main Time Pameran'),
        // ('2021-09-25 14:00', '2021-09-25 15:30', 'Seminar Secret Knowledge of Content Creating <br> ( Pembicara : Bani Adil )'),
        // ('2021-09-25 15:30', '2021-09-25 15:45', 'Briefing mekanisme lomba'),
        // ('2021-09-25 15:45', '2021-09-25 18:15', 'Lomba character design dimulai'),
        // ('2021-09-25 18:15', '2021-09-25 18:30', 'Closing')";
        $sql = "INSERT INTO schedule (waktu_mulai, waktu_selesai, kegiatan) VALUES 
        ('2021-09-26 10:00', '2021-09-26 10:15', 'Opening'),
        ('2021-09-26 10:15', '2021-09-26 11:45', 'Seminar So you want to be a Motion Grapher? <br> ( Pembicara : Mikhael Ming Khosasih, S.Kom., M.M. )'),
        ('2021-09-26 11:45', '2021-09-26 13:00', 'ISHOMA'),
        ('2021-09-26 13:00', '2021-09-26 14:00', 'Main Time Pameran'),
        ('2021-09-26 14:00', '2021-09-26 15:30', 'Seminar The Process of Creating a Marvel Comic <br> ( Pembicara : Ario Anindito )'),
        ('2021-09-26 15:30', '2021-09-26 15:45', 'Briefing Presentasi Character Design dan Final PUBG'),
        ('2021-09-26 15:45', '2021-09-26 17:45', 'Presentasi hasil karya character design (90 menit) <br> Final PUBG (120 menit)'),
        ('2021-09-26 18:00', '2021-09-26 19:00', 'ISHOMA'),
        ('2021-09-26 19:00', '2021-09-26 19:25', 'Pengumuman pemenang'),
        ('2021-09-26 19:25', '2021-09-26 19:35', 'Closing')";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateEvent($data, $files)
    {
        // $sql = "UPDATE event SET nama = :nama, tanggal_mulai = :tgl_mulai, tanggal_selesai = :tgl_selesai, deskripsi = :deskripsi, author = :author, syarat_ketentuan = :syarat, link_wa = :linkwa, link_zoom = :linkzoom, id_zoom = :idzoom, pass_zoom = :passzoom, jenis_id = :jenis_id, link_mekanisme = :linkmekanisme, status = :status WHERE id = :id";
        // $this->db->query($sql);
        // $this->db->bind('nama', $data['nama']);
        // $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        // $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        // $this->db->bind('deskripsi', $data['deskripsi']);
        // $this->db->bind('author', $data['author']);
        // $this->db->bind('syarat', $data['syarat']);
        // $this->db->bind('linkwa', $data['linkwa']);
        // $this->db->bind('linkzoom', $data['linkzoom']);
        // $this->db->bind('idzoom', $data['idzoom']);
        // $this->db->bind('passzoom', $data['passzoom']);
        // $this->db->bind('jenis_id', $data['jenis_id']);
        // $this->db->bind('linkmekanisme', $data['linkmekanisme']);
        // $this->db->bind('status', $data['status']);
        // $this->db->bind('id', $data['eid']);
        // $this->db->execute();
        // if ($files['poster']['error'][0] != 4) {
        //     if ($this->db->rowCount() >= 0) {
        //         $this->insertGambar($files, $data['eid']);
        //     }
        // }
        // if (isset($data['deleted_poster'])) {
        //     foreach ($data['deleted_poster'] as $nama_file) {
        //         echo $nama_file . "<br>";
        //         $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
        //         $idgambar = trim($nama_file, "." . $ext);
        //         $sql = "DELETE FROM gambar where id = :idgambar";
        //         $this->db->query($sql);
        //         $this->db->bind('idgambar', $idgambar);
        //         $this->db->execute();
        //         if (file_exists(BASECSS . "/img/uploadedEventImage/$nama_file")) {
        //             unlink(BASECSS . "/img/uploadedEventImage/$nama_file");
        //         }
        //     }
        // }
        // return $this->db->rowCount();
    }

    public function createScheduleTable()
    {
        // $sql = "CREATE TABLE schedule (
        //     id int NOT NULL AUTO_INCREMENT,
        //     waktu_mulai datetime,
        //     waktu_selesai datetime,
        //     kegiatan text,
        //     PRIMARY KEY (id)
        // )";
        // $this->db->query($sql);
        // $this->db->execute();
        
        $sql = "DESCRIBE schedule";
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->resultSet();
    }
}
