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
        $sql = "SELECT * from user;";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function validateUser($username, $password)
    {
        $sql = "SELECT ('username', 'password') from user where username = ?";
    }

    public function checkUsername($username)
    {
        $sql = "SELECT ('username') from user where username = ?";
        $this->db->query($sql);
        if ($this->db->resultSet() == 0)
            return false;
        else
            return true;
    }

    public function insertUser($username, $password, $nama, $email, $no_hp, $nrp = 0)
    {
        $sql = "INSERT into user (username, password, nama, email, no_hp, nrp) values(?,?,?,?,?,?)";
    }
}
