<?php
class Users{
    private  PDO $db;

    public function __construct(PDO $database)
    {
        $this->db = $database;
    }

    public function getUsers(){
        $req = $this->db->prepare("SELECT * FROM essai");
        $req->execute();
        return $req->fetchAll();
    }
}