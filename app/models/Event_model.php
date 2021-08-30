<?php
class Event_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEvent()
    {
        $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getJenisEvent()
    {
        $sql = "SELECT * FROM jenis";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getEvent($data)
    {
        // $event = str_replace('-', ' ', $data);
        // $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where e.nama = :nama";
        $sql = "SELECT e.*,j.jenis from event e inner join jenis j on e.jenis_id = j.id where e.id = :id";
        $this->db->query($sql);
        // $this->db->bind('id', $event);
        $this->db->bind('id', $data['eid']);
        return $this->db->single();
    }

    public function getEventPerCategory($data)
    {
        $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where j.jenis like :jenis";
        $this->db->query($sql);
        $this->db->bind('jenis', "%$data%");
        return $this->db->resultSet();
    }

    public function insertEvent($data)
    {
        $sql = "INSERT into event (nama,tanggal_mulai,tanggal_selesai,deskripsi,author, syarat_ketentuan, link_wa,link_zoom,jenis_id) VALUES (:nama, :tgl_mulai, :tgl_selesai, :deskripsi, :author, :syarat, :linkwa, :linkzoom, :jenis_id)";
        $this->db->query($sql);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('linkwa', $data['linkwa']);
        $this->db->bind('linkzoom', $data['linkzoom']);
        $this->db->bind('jenis_id', $data['jenis_id']);
        $this->db->execute();
        // $idevent = $this->db->getLastId();
        // if ($this->db->rowCount() > 0) {
        //     foreach ($data['poster'] as $nama_file) {
        //         $sql = 'INSERT INTO gambar (event_id, extension) VALUES (:idevent, :extension)';
        //         $this->db->query($sql);
        //         $this->db->bind('idevent', $idevent);
        //         $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
        //         $this->db->bind('extension', $ext);
        //         $this->db->execute();
        //         return $this->db->rowCount();
        //     }
        // }
        return $this->db->rowCount();
    }
    public function updateEvent($data)
    {
        $sql = "UPDATE event SET nama = :nama, tanggal_mulai = :tgl_mulai, tanggal_selesai = :tgl_selesai, deskripsi = :deskripsi, author = :author, syarat_ketentuan = :syarat, link_wa = :linkwa, link_zoom = :linkzoom, jenis_id = :jenis_id WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('linkwa', $data['linkwa']);
        $this->db->bind('linkzoom', $data['linkzoom']);
        $this->db->bind('jenis_id', $data['jenis_id']);
        $this->db->bind('id', $data['eid']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteEvent($data)
    {
        $sql = "DELETE FROM event WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $data['eid']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
