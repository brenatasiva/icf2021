<?php
class User_model
{
    private $db;

    public function getUser()
    {
    }

    public function __construct()
    {
        $this->db = new Database;
    }
}
