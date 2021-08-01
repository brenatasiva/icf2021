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
        $sql = "SELECT * from event";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getEvent($id)
    {
        $sql = "SELECT * from event where id = $id";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
