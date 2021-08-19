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

    public function getEvent($data)
    {
        // $event = str_replace('-', ' ', $data);
        // $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where e.nama = :nama";
        $sql = "SELECT e.*, j.jenis from event e inner join jenis j on e.jenis_id = j.id where e.id = :id";
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
        $sql = "INSERT into event ('nama','tanggal_mulai','tanggal_selesai','deskripsi','link','jenis_id) values(:nama, :tgl_mulai, :tgl_selesai, :deskripsi, :link, :jenis_id)";
        $this->db->query($sql);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('link', $data['link']);
        $this->db->bind('jenis_id', $data['jenis_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
