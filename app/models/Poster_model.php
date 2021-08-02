<?php
class Poster_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPoster()
    {
        $sql = "SELECT * from poster";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getPosterPerEvent($data)
    {
        $sql = "SELECT * from poster where event_id = :event_id";
        $this->db->query($sql);
        $this->db->bind('event_id', $data['event_id']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function insertPoster($data)
    {
        $sql = "INSERT into poster ('event_id','extention) values(:event_id, :extention)";
        $this->db->query($sql);
        $this->db->bind('event_id', $data['event_id']);
        $this->db->bind('extention', $data['extention']);
        $this->db->execute();
        $this->db->rowCount();
    }
}
