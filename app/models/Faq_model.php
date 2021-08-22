<?php
class Faq_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFaq()
    {
        $sql = "SELECT * from faq";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getFaqById($data)
    {
        $sql = "SELECT * from faq WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $data['id']);
        return $this->db->single();
    }

    public function insertFaq($data)
    {
        $sql = "INSERT INTO faq (pertanyaan , jawaban) VALUES (:pertanyaan, :jawaban)";
        $this->db->query($sql);
        $this->db->bind('pertanyaan', $data['pertanyaan']);
        $this->db->bind('jawaban', $data['jawaban']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateFaq($data)
    {
        $sql = "UPDATE faq SET pertanyaan = :pertanyaan, jawaban = :jawaban WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('pertanyaan', $data['pertanyaan']);
        $this->db->bind('jawaban', $data['jawaban']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteFaq($data)
    {
        $sql = "DELETE FROM faq WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
