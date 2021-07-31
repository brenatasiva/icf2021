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
        $db->query($sql);
        return $db->resultSet();
    }  
}
?>