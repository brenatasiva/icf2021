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
        $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where e.id = :id";
        $this->db->query($sql);
        // $this->db->bind('id', $event);
        $this->db->bind('id', $data['eid']);
        $event = $this->db->single();

        $sql = "SELECT * FROM gambar where event_id = :idevent";
        $this->db->query($sql);
        $this->db->bind('idevent', $data['eid']);
        $images = $this->db->resultSet();
        return $data = [
            'event' => $event,
            'images' => $images
        ];
    }

    public function getEventPerCategory($data)
    {
        $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where j.jenis like :jenis";
        $this->db->query($sql);
        $this->db->bind('jenis', "%$data%");
        return $this->db->resultSet();
    }

    public function insertEvent($data, $files)
    {
        $sql = "INSERT into event (nama,tanggal_mulai,tanggal_selesai,deskripsi,author, syarat_ketentuan, link_wa,link_zoom, id_zoom, pass_zoom, jenis_id) VALUES (:nama, :tgl_mulai, :tgl_selesai, :deskripsi, :author, :syarat, :linkwa, :linkzoom, :idzoom, :passzoom, :jenis_id)";
        $this->db->query($sql);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('linkwa', $data['linkwa']);
        $this->db->bind('linkzoom', $data['linkzoom']);
        $this->db->bind('idzoom', $data['idzoom']);
        $this->db->bind('passzoom', $data['passzoom']);
        $this->db->bind('jenis_id', $data['jenis_id']);
        $this->db->execute();
        $idevent = $this->db->getLastId();
        if ($files['poster']['error'][0] != 4) {
            if ($this->db->rowCount() > 0) {
                return $this->insertGambar($files, $idevent);
            }
        }
        return $this->db->rowCount();
    }

    public function insertGambar($files, $idevent)
    {
        $affectedrows = 0;
        for ($i = 0; $i < count($files['poster']['name']); $i++) {
            $sql = 'INSERT INTO gambar (event_id, extension) VALUES (:idevent, :extension)';
            $this->db->query($sql);
            $this->db->bind('idevent', $idevent);
            $ext = pathinfo($files['poster']['name'][$i], PATHINFO_EXTENSION);
            $this->db->bind('extension', $ext);
            $this->db->execute();
            $idgambar = $this->db->getLastId();
            $affectedrows += $this->db->rowCount();
            move_uploaded_file($files['poster']['tmp_name'][$i], "img/uploadedEventImage/$idgambar.$ext");
        }
        return $affectedrows;
    }

    public function deleteGambar($idevent)
    {
        $sql = 'SELECT * FROM gambar WHERE event_id = :idevent';
        $this->db->query($sql);
        $this->db->bind('idevent', $idevent);
        $images = $this->db->resultSet();
        foreach ($images as $img) {
            if (file_exists("img/uploadedEventImage/" . $img['id'] . "." . $img['extension'])) {
                unlink("img/uploadedEventImage/" . $img['id'] . "." . $img['extension']);
            }
        }
        $affectedrows = 0;
        $sql = 'DELETE FROM gambar WHERE event_id = :idevent';
        $this->db->query($sql);
        $this->db->bind('idevent', $idevent);
        $this->db->execute();
        $affectedrows += $this->db->rowCount();
        return $affectedrows;
    }

    public function updateEvent($data, $files)
    {

        $sql = "UPDATE event SET nama = :nama, tanggal_mulai = :tgl_mulai, tanggal_selesai = :tgl_selesai, deskripsi = :deskripsi, author = :author, syarat_ketentuan = :syarat, link_wa = :linkwa, link_zoom = :linkzoom, id_zoom = :idzoom, pass_zoom = :passzoom, jenis_id = :jenis_id WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('linkwa', $data['linkwa']);
        $this->db->bind('linkzoom', $data['linkzoom']);
        $this->db->bind('idzoom', $data['idzoom']);
        $this->db->bind('passzoom', $data['passzoom']);
        $this->db->bind('jenis_id', $data['jenis_id']);
        $this->db->bind('id', $data['eid']);
        $this->db->execute();
        if ($files['poster']['error'][0] != 4) {
            if ($this->db->rowCount() >= 0) {
                $this->insertGambar($files, $data['eid']);
            }
        }
        if (isset($data['deleted_poster'])) {
            foreach ($data['deleted_poster'] as $nama_file) {
                echo $nama_file . "<br>";
                $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
                $idgambar = trim($nama_file, "." . $ext);
                $sql = "DELETE FROM gambar where id = :idgambar";
                $this->db->query($sql);
                $this->db->bind('idgambar', $idgambar);
                $this->db->execute();
                if (file_exists("img/uploadedEventImage/$nama_file")) {
                    unlink("img/uploadedEventImage/$nama_file");
                }
            }
        }
        return $this->db->rowCount();
    }

    public function deleteEvent($data)
    {
        $this->deleteGambar($data['eid']);
        $sql = "DELETE FROM event WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $data['eid']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
